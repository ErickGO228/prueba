class Vuelo:
    def _init_(self, capacidad):
        self.capacidad = capacidad
        self.pasajeros = []

    def getDisponibles(self):
        return self.capacidad - len(self.pasajeros)

    def addPasajero(self,nombre):
        if self.getDisponibles:
         self.pasajeros.append(nombre)
         return True
        else:
            return False

vuelo = Vuelo(3)

print(vuelo.getDisponibles())
print(vuelo.addPasajero("Max1"))
print(vuelo.addPasajero("Max2"))
print(vuelo.addPasajero("Max3"))
print(vuelo.addPasajero("Max4"))

print(vuelo.getDisponibles())
