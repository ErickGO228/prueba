from django.shortcuts import render

# Create your views here.
def paginaviernes(request):
    return render(request, "Viernes/viernes.html")