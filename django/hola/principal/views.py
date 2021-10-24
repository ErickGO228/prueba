from django.shortcuts import render
from django.http import HttpResponse

# Create your views here.
def holaDjango(request):
    return HttpResponse("Hola Django")

def pepe(request):
    return HttpResponse("Hola pepe")

def holaTu(request, nombre):
    return HttpResponse(f"Hola {nombre.capitalize()}!")