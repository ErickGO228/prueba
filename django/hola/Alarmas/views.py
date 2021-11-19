from django.shortcuts import render
from django import forms

alarmas = ["5:30", "5:35","5:40","5:50"]

# Create your views here.

def index(request):
  return render(request, "alarmas/index.html", {"alarmas" :alarmas})

def v2(request):
  return render(request, "alarmas/v2.html", {'cont_form':FNuevaAlarma()})

class FNuevaAlarma(forms.Form):
  alarma = forms.CharField(label='Nueva alarma') #<input type = 'text'.....>

  #snooze = forms.IntegerField(label='Repetir', min_value=0, max_value=10)#<input type = 'numb'.....>

  