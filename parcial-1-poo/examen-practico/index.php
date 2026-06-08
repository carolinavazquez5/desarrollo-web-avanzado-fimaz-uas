<?php

require_once "Admin.php";
require_once "Alumno.php";

try {

    //Crear usuarios
    $admin = new Admin("Alberto", "alberto@gmail.com");
    $alumno = new Alumno("Mauro", "mauro@gmail.com", "2025001");

    //Tabla
    echo "<h2>Usuarios</h2>";

    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Nombre</th>";
    echo "<th>Correo</th>";
    echo "<th>Rol</th>";
    echo "<th>Matrícula</th>";
    echo "</tr>";

    //Fila Admin
    echo "<tr>";
    echo "<td>" . $admin->getNombre() . "</td>";
    echo "<td>" . $admin->getCorreo() . "</td>";
    echo "<td>" . $admin->getRol() . "</td>";
    echo "<td>-</td>";
    echo "</tr>";

    //Fila Alumno
    echo "<tr>";
    echo "<td>" . $alumno->getNombre() . "</td>";
    echo "<td>" . $alumno->getCorreo() . "</td>";
    echo "<td>" . $alumno->getRol() . "</td>";
    echo "<td>" . $alumno->getMatricula() . "</td>";
    echo "</tr>";

    echo "</table>";

    echo "<br><h3>Usuario/Alumno correo inválido</h3>";

    //Usuario con correo inválido
    $usuarioError = new Alumno("Carolina", "correo_invalido", "2057964");

} catch (Exception $e) {

    echo "<br><b>Error:</b> " . $e->getMessage();

}

?>