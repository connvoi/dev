from django.db import models
import twitter

# Create your models here.
class Search(models.Model):
  def getsearch(self, query, page):
    api=twitter.Api()
    status=api.GetSearch(query, '', '', 20, page, 'ja', 'true', False)
    return status
