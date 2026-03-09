<?php
require_once "Admin.php";
$objAdmin = new Admin("Carolina", "carolina@gmail.com", "Administrador");
echo "<b>Nombre:</b>" . $objAdmin->getNombre() . "<br>";
echo "<b>Correo:</b>" . $objAdmin->getCorreo() . "<br>";
echo "<b>Rol:</b>" . $objAdmin->getRol() . "<br>"; 
?>