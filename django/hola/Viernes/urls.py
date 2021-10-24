from django.urls import path
from . import views

urlpatterns = [
    path("viernes", views.paginaviernes, name= "indice"),
]