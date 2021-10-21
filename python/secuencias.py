from typing import Set


nombre = "Paulina"
print(nombre[0])
nombres = ["Paulina", "Moises", "Hector", "Balam", "Raul", "Jocelyn"]
print(nombres)

nombres[0] = "Max"
print(nombres)

nombres.sort()#lee la lista de forma ordenada 
print(nombres)

nombres.append("Paulina")# agrego el nombre de paulina
nombres.reverse()# lee la lista al revez 
print(nombres)

# Tuplas
tupla = (1, 2, 3, 4, 5, 3, 5)

print(tupla)
print(tupla.count(3))#cuenta cuantos elementos hay en la tupla 
print(tupla.index(3))#regresa el primer indice o lugar de el valor3 
#tupla[0] = 23 esto no es posible 

#SETS

s = set()

s.add(1)
s.add(2)
s.add(3)
s.add(4)
s.add(5)
print(s)

s.remove(3)

print(s)

#Diccionario
edades = {"Paulina":21, "Moises":22, "Hector":23, "Balam":24, "Raul":24, "Jocelyn":26}
colores = {"rojo":255}
print(edades)
print(edades["Jocelyn"])
edades["Raul"] = 20
print(edades)

edades["Balam"] += 1
print(edades)

#Matrices
m = [[1,2,3], [4,5,6]]
print(m)

print(m[0][2])
