
from Queue import Queue  # Threadsafe queue for threads to use
from collections import Counter  # To count stuff for us
import datetime  # Because datetime printing is hard
import time  # Should be obvious
import sys  # Get system info
import threading  # Should be obvious
import json  # Also obvious

# FB API wrapper ("pip install facepy")
import facepy
from utils import Color, notify_mac, log

appeared = dict()


# Access token can be obtained by doing the following:
# - Log into facebook
# - Go to this url: https://developers.facebook.com/tools/explorer
fb_API_access_token = "CAACEdEose0cBAJhD3niy8deZBtgtv3GWNwaHfG6sTZAIhy9jwvBJuX9EkqKrBLvDqGGbd9QRnhukBdVKNdZARSGT9ycf4PrVPdlgmhnwYHGgboDPefWDOvlOJKGU7tuS9sTynmNgecZCoO6cccjqkBnSEGRNiTAzfQj2FGK2KfJYtJgAoGgbiaw2MD0lGtADDA0cOTuGSiu3WZAszc97ZCYJu2E3JnXz8ZD"

# Junk method used for testing
def test():
    log("Test")


# Export method, recieves a jsonObj of style {"label": dictionary}
def exportData(jsonDict):
    # Do stuff
    print "Exported"
    # print jsonDict


# Thread class. Each thread gets all the data from a certain date range
class RequestThread(threading.Thread):
    def __init__(self, queue, apikey, query, curr_time, num_weeks):

        # Super class
        threading.Thread.__init__(self)

        # Queue object given from outside. Queues are threadsafe
        self.queue = queue

        # Graph object for our call, authenticated with a token
        self.graph = facepy.GraphAPI(apikey)

        # FQL query with specified date range
        self.input_query = query

        # Counters. t-total, p-posts, c-comments
        self.tcounter = Counter()
        self.pcounter = Counter()
        self.ccounter = Counter()
        self.tpcounter = Counter()
        self.tccounter = Counter()
        self.cccounter = Counter()

        # Time range, for logging
        self.time_range = datetime.datetime.fromtimestamp(
            curr_time - num_weeks).strftime('%Y-%m-%d') + "-" + \
                          datetime.datetime.fromtimestamp(curr_time).strftime(
                              '%Y-%m-%d')

    # Main runner
    def run(self):
        # Get group posts
        try:
            group_posts = self.graph.fql(query=self.input_query)
        except Exception as e:
            # 99% of the time this is just an expired API access token
            log("Error: " + str(e), Color.RED)
            sys.exit()

        log("\t(" + self.time_range + ") - " +
            str(len(group_posts["data"])) + " posts")

        # Iterate over posts
        if len(group_posts) != 0:
            for post in group_posts["data"]:
                comments_query = \
                    "SELECT fromid, likes, id, time FROM comment WHERE post_id="

                # Add post's like count to that user in our total_likes_counter
                self.tcounter[post['actor_id']] += post['like_info']['like_count']

                # Add to top like posts counter
                self.pcounter[post['post_id']] = post['like_info']['like_count']

                # Timestamp of post by 
                day_timestamp = datetime.datetime.fromtimestamp(int(post['created_time']))
                day_timestamp = day_timestamp.replace(hour=0, minute=0,second=0, microsecond=0)
                day_timestamp = (day_timestamp - datetime.datetime(1970, 1, 1)).total_seconds()

                # If it's a new actor
                if post['actor_id'] in appeared.keys():
                    if appeared[post['actor_id']] > int(post['created_time']):
                        appeared[post['actor_id']] = int(post['created_time'])
                else:
                    appeared[post['actor_id']] = int(post['created_time'])

                # Add to user's post count
                self.tpcounter[post['actor_id']] += 1

                # Initialize controversial counter
                self.cccounter[post['post_id']] += 1

                # Get likes on comments
                comments = self.graph.fql(
                    comments_query + "\"" + str(post['post_id']) +
                    "\" LIMIT 2000")

                # Iterate over comments
                if len(comments["data"]) != 0:

                    for c in comments["data"]:
                        # add their like counts to their respective users
                        # in our total_likes_counter
                        self.tcounter[c['fromid']] += c['likes']

                        # add like count to top_comments_likes_counter
                        self.ccounter[c['id']] = c['likes']

                        # Add to user's comment count
                        self.tccounter[c['fromid']] += 1

                        # Add to controversial counter
                        self.cccounter[post['post_id']] += 1

                        # Add comment date

                        # If it's a new actor
                        if c['fromid'] in appeared.keys():
                            if appeared[c['fromid']] > int(c['time']):
                                appeared[c['fromid']] = int(c['time'])
                        else:
                            appeared[c['fromid']] = int(c['time'])

        self.queue.put({'t': self.tcounter, 'p': self.pcounter, 'c':
                        self.ccounter, 'tp': self.tpcounter,
                        'tc': self.tccounter, 'cc': self.cccounter})


# Method for counting various total likes in a group
def count_group_likes():

    # Only necessary if you want to get an extended access token
    # You'll have to make a facebook app and generate a token with it
    # You'll also need to get the following two values from it
    fb_app_id = "id_goes_here"
    fb_secret_key = "key_goes_here"

    # Counter object to do the counting for us
    total_likes_counter = Counter()
    top_liked_posts_counter = Counter()
    top_liked_comments_counter = Counter()
    total_posts_counter = Counter()
    total_comments_counter = Counter()
    most_discussed_counter = Counter()

    group_id = "155607091223285"  # Unique ID of the group to search.

    # Put the number of weeks you want it to increment by each time
    #   smaller is better, but too small and you could hit your rate limit
    #       ... which is 600 calls per 600 seconds. Maybe apps get more
    num_weeks = int("2")

    # Convert to unix time
    num_weeks_unix = num_weeks * 604800

    # Start date, in unix time (our group was made 2/13/12) 1329091200
    # You can use this to convert: http://goo.gl/4QMFbW
    start_date = int("1329091200")
    
    datetime_start_date = datetime.datetime.fromtimestamp(start_date)

    # Query strings for FQL
    posts_query = \
        "SELECT post_id, like_info, actor_id, created_time FROM stream" + \
        " WHERE source_id=" + group_id + " AND created_time<"
    person_query = "SELECT first_name, middle_name, last_name FROM user WHERE uid="

    # Authorize our API wrapper
    graph = facepy.GraphAPI(fb_API_access_token)

    # Code to programatically extend key
    if extend_key:
        access_token, expires_at = facepy.get_extended_access_token(
            fb_API_access_token,
            fb_app_id,
            fb_secret_key
        )

        # This will print out new extended token and new expiration date
        # Copy them and replace your token above with this one
        print 'New token: ' + access_token
        print 'New expiration date: ' + expires_at

    log('Getting group posts', Color.BLUE)

    # Send end time to current time and work backward
    end_time = int(time.time())

    # Or manually set end time
    # end_time = 1392422400

    log('Current date is: ' + datetime.datetime.fromtimestamp(
        end_time).strftime('%Y-%m-%d'))

    log('Incrementing by ' + str(num_weeks) + ' weeks at a time')

    # List of thread objects
    threads = []

    # Threadsafe queue for the threads to dump their data in
    final_queue = Queue()

    log("Initializing threads...", Color.BLUE)

    # While loop that creates the threads
    # Instantiates each thread with calculated time, keeps decrementing to
    # start
    while end_time > start_date:
        # New query
        new_query = posts_query + str(
            end_time) + " AND created_time>" + \
            str(end_time - num_weeks_unix) + " LIMIT 2000"

        # Thread creation
        t = RequestThread(final_queue, fb_API_access_token, new_query,
                          end_time, num_weeks_unix)

        # Add it to our list
        threads.append(t)

        # Decrement the time
        end_time -= num_weeks_unix

        # Start the thread
        t.start()

    log("Joining threads...", Color.BLUE)

    # Wait for all the threads to finish before counting everything up
    for t in threads:
        t.join()

    log("Done, merging data...", Color.BLUE)

    # Count up all the data by merging all the counters from each thread result
    for stuff in list(final_queue.queue):
        total_likes_counter += stuff['t']
        top_liked_posts_counter += stuff['p']
        top_liked_comments_counter += stuff['c']
        total_posts_counter += stuff['tp']
        total_comments_counter += stuff['tc']
        most_discussed_counter += stuff['cc']

    most_active_day_counter = total_posts_counter + total_comments_counter

    # Returns key-value list of top <num_of_items_to_return> items
    num_of_items_to_return = 2000
    most_common_people = total_likes_counter.most_common(num_of_items_to_return)
    total_comments = total_comments_counter.most_common(num_of_items_to_return)


    top_people_stats = []
    # Iterate over top people and retrieve names from their ID's
    # Use enumerate to keep track of indices for rank numbers

    schema = ["rank","name","likes","likesPerWeek","comments","commentsPerWeek","likesPerComment","posts","firstPost"]

    standings_file = open('../likes.json', 'w')
    standings_file.write("[\n")
    for i, x in enumerate(most_common_people):
        person = graph.fql(person_query + str(x[0]))["data"][0]

        now = datetime.datetime.now()
        join_date = datetime.datetime.fromtimestamp(appeared[x[0]])
        diff1 = now - datetime_start_date
        diff2 = now - join_date

        avg = x[1] / (diff1.total_seconds() / 60 / 60 / 24 / 7)
        weighted_avg = x[1] / (diff2.total_seconds() / 60 / 60 / 24 / 7)
        comments_per_week = total_comments_counter[x[0]] / (diff2.total_seconds() / 60 / 60 / 24 / 7)

        top_people_stats.append({
            "name": person['first_name'] + " " + person['last_name'],
            "likes": x[1],
            "avg": avg,
            "augmented_avg": weighted_avg,
            "first": int(
                (join_date - datetime.datetime(1970, 1, 1)).total_seconds())
        })

		
        fullName = ""
        if person['middle_name'] is None:
            fullName = person['first_name'] + " " + person['last_name']
        elif (len(person['middle_name']) > 0):
            fullName = person['first_name'] + " " + person['middle_name'] + " " + person['last_name']
        else:
            fullName = person['first_name'] + " " + person['last_name']

        likesPerComment = 0
        if total_comments_counter[x[0]] > 0:
            likesPerComment = (1.0*x[1])/float(total_comments_counter[x[0]])

        rank = i+1
        dp = DataPoint(i+1,fullName,x[1],weighted_avg,total_comments_counter[x[0]],comments_per_week,likesPerComment,total_posts_counter[x[0]],join_date.strftime('%Y-%m-%d'))

        try:
            print str(dp).encode('utf8')
            standings_file.write("{\n")
            standings_file.write(str(dp).encode('utf8'))
            standings_file.write("},\n")
        except UnicodeEncodeError:
        	pass

    standings_file.write("\n]")
    standings_file.close()


class DataPoint():
	def __init__(self, d1, d2, d3, d4, d5, d6, d7, d8, d9):
		self.schema = ["id","name","likes","likesPerWeek","comments","commentsPerWeek","likesPerComment","posts","firstPost"]
		self.data = []
		self.data.append(d1)
		self.data.append(d2)
		self.data.append(d3)
		self.data.append(d4)
		self.data.append(d5)
		self.data.append(d6)
		self.data.append(d7)
		self.data.append(d8)
		self.data.append(d9)

	def __str__(self):
		result = ""
		for i in range(len(self.data)-1):
			if i == 1:
				result += "\t\"" + str(self.schema[i]) + "\":" + "\"" + str(self.data[i]) + "\",\n"
			else:
				result += "\t\"" + str(self.schema[i]) + "\":" + str(self.data[i]) + ",\n"
		result += "\t\"" + str(self.schema[8]) + "\":" + "\"" + str(self.data[8]) + "\"\n"
		return result

args = sys.argv

extend_key = False  # boolean for if we want to extend token access

if len(args) > 1:
    if "--extend" in args:  # Pass in flag
        extend_key = True
    if "test" in args:
        test()
        sys.exit()
    else:
        log('No args specified')

count_group_likes()
notify_mac()
