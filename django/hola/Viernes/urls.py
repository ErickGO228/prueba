from django.urls import path
from . import views

urlpatterns = [
    path("viernes", views.paginaviernes, name= "indice"),
    path("viernes2", views.paginaviernes2, name="paginaviernes2")
]