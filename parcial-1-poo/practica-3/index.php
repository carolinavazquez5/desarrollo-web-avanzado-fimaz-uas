<?php

require_once "clases/Admin.php";
require_once "clases/Alumno.php";

try {

    echo "<h3>Usuario válido</h3>";

    $admin = new Admin("Alberto", "alberto@gmail.com");
    echo "Nombre: " . $admin->getNombre() . "<br>";
    echo "Correo: " . $admin->getCorreo() . "<br>";
    echo "Rol: " . $admin->getRol() . "<br><br>";

    $alumno = new Alumno("Rosa", "rosa@gmail.com", "2024001");
    echo "Nombre: " . $alumno->getNombre() . "<br>";
    echo "Correo: " . $alumno->getCorreo() . "<br>";
    echo "Matrícula: " . $alumno->getMatricula() . "<br>";
    echo "Rol: " . $alumno->getRol() . "<br><br>";

    echo "<h3>Usuario inválido</h3>";

    $usuarioError = new Admin("Pedro", "correo_invalido");

} catch (Exception $e) {

    echo "Error: " . $e->getMessage();

}

?>