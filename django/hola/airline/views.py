from django.shortcuts import render
from .models import Fligth

# Create your views here.
def index(request):
    return render(request, 'airline/index.html', {"flights":Fligth.objects.all()})

def flight(request, flight_id):
    flight = Fligth.objects.get(id=flight_id)
    return render(request, 'airline/flight.html',{'flight':flight})