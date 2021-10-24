from django.urls import path
from . import views

urlpatterns = [
    path("indice", views.indiceV, name= "indice"),
]