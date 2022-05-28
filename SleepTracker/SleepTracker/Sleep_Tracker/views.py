from django.shortcuts import render
from django.http import HttpResponse
# Create your views here.
def function(request):
    html=""
    return render(request, 'Sleep_Tracker/index.html')
