from django.conf.urls import url
from mysite.blog import views

urlpatterns = [
    url(r'^$', views.home, name='home'),
]