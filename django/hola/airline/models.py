from django.db import models
from django.db.models.base import Model

# Create your models here.

class Fligth(models.Model):
    origin = models.CharField(max_length=64)
    destination = models.CharField(max_length=64)
    duration = models.IntegerField()



def _str_(self):
    return f"{self.id}: De {self.origin} a {self.destination} tardas {self.duration}"





