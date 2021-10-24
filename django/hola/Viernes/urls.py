from django.urls import path
from . import views

urlpatterns = [
    path("indiceV", views.indiceV, name= "indiceV")
]