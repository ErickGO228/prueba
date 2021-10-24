from django.shortcuts import render

# Create your views here.
def indiceV(request):
    return render(request, "Viernes/viernes.html")