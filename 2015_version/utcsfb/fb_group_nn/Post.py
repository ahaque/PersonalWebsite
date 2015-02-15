'''
Each instance represents a Facebook Post and its associated comments
'''
class Post:
	def __init__(self, node):
		self.sender = node["from"]
		self.message = node["message"]

		if "likes" in node:
			self.numLikes = len(node["likes"]["data"])
		else:
			self.numLikes = 0