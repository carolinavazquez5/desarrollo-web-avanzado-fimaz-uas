<?php
require_once "Usuario.php";
    $objUsuario = new Usuario("Carolina", "carolina@gmail.com");
echo "<b>Nombre:</b>" . $objUsuario->getNombre() . "<br>";
echo "<b>Correo:</b>" . $objUsuario->getCorreo() . "<br>";
?>