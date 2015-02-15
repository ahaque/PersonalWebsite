"""
Created by Albert Haque
September 2014
"""
from facepy import GraphAPI
from Post import Post

# Graph API access token: https://developers.facebook.com/tools/explorer/
fb_access_token = "CAACEdEose0cBAL6ICMnFZClZC155stiSzQRqPU2Pd6GUX4yADmubDpCBXNyP396akrbhmapJaPf6uETS09O1WrPRUU2iCF9SDakRSEFJFSySAQsftpNJ3W5N6fj6fwJYuQGQWAI0KBCZAIuf1EOixwlZAxhZC1ZAItPvlKx3H62jteqQ3osQiBrn9zfDZCjjPtLTy6nv33ZBnnrDb1t6dEbF"
# Facebook group to crawl
fb_group_id = "155607091223285"

class GraphCrawler:

	def __init__(self, fb_access_token, fb_group_id):
		self.fb_access_token = fb_access_token
		self.fb_group_id = fb_group_id
		self.graph = GraphAPI(self.fb_access_token)

	def getPosts(self):
		group_feed = self.graph.get(self.fb_group_id + "/feed")
		for post in group_feed["data"]:
			#print "---------------------------------\n" + post["from"]["name"] + "\n" + post["message"]
			p = Post(post)
			print p.message

def main():
	gc = GraphCrawler(fb_access_token, fb_group_id)
	gc.getPosts()


if __name__ == "__main__":
    main()