from django.shortcuts import render
from datetime import datetime

# Create your views here.
def paginaviernes(request):
    return render(request, "Viernes/viernes.html", {"Esviernes": datetime.today().isoweekday() == 5})