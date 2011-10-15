# Create your views here.
from django.shortcuts import render_to_response
from django.http import HttpResponse,Http404
from search.models import Search

import twitter

def home(request):
  query=request.GET.get('query','')
  page=request.GET.get('page',1)
  next=int(page)+1; 

  tw=Search()
  tweets=tw.getsearch(query, page)
  return render_to_response('search/search_template.html',
      {'tweets':tweets, 'query':query, 'page':page, 'next':next})
