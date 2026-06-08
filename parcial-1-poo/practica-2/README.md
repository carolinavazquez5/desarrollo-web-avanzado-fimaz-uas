# Práctica 2- Herencia y reutilización de código en php

## Explicación de la herencia aplicada
La herencia permite que una clase use propiedades y métodos de otra clase.
En esta práctica Admin hereda de Usuario usando: class Admin extends Usuario
Así la clase Admin puede usar los métodos para obtener el nombre y correo sin tener que volver a escribirlos.

## Diferencias entre Usuario y Admin
La clase Usuario tiene Nombre y Correo.
Mientras que la clase Admin hereda de Usuario y además tiene un Rol.

## Evidencia de ejecución 
Se creó un objeto: $objAdmin = new Admin("Carolina", "carolina@gmail.com", "Administrador");
Y al ejecutarlo se muestra:
Nombre: Carolina
Correo: carolina@gmail.com
Rol: Administrador