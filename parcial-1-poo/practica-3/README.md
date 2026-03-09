# Practica 3- Sistema de Usuarios con validaciones y exepciones 

## Descripción del sistema
Este sistema permite crear usuarios con validación de correo electrónico.
Se implementa una clase base llamada Usuario y dos clases derivadas: Admin y Alumno.

## Flujo de clases
Usuario (Clase base)
- nombre
- correo
- Validación de formato de correo

Admin
- Hereda de Usuario
- Método getRol() devuelve "Administrador"

Alumno
- Hereda de Usuario
- Tiene un atributo adicional llamado matricula
- Método getRol() devuelve "Alumno"

## Manejo de errores
El sistema utiliza bloques try/catch para controlar errores cuando se crea un usuario con un correo inválido.

Si el correo no tiene formato válido, se lanza una excepción y se muestra un mensaje de error.