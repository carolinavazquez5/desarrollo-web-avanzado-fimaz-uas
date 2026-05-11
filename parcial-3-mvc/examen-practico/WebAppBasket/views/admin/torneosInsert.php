<?php
    require_once("../../controllers/torneosController.php");
    //Atrapar los valores introducidos por el usuario en el formulario.
    $id = $_POST['txtId'] ?? null;
    $nombreTorneo = $_POST['txtNombreTorneo'];
    $organizador = $_POST['txtOrganizador'];
    $patrocinadores = $_POST['txtPatrocinadores'];
    $sede = $_POST['txtSede'];
    $categoria = $_POST['txtCategoria'];
    $premio1 = $_POST['txtPremio1'];
    $premio2 = $_POST['txtPremio2'];
    $premio3 = $_POST['txtPremio3'];
    $otroPremio = $_POST['txtOtroPremio'];
    $usuario = $_POST['txtUsuario'];
    $contrasena = $_POST['txtContrasena'];

    //Instanciamos nuestro Controlador
    $objController = new torneosController();
    $objController->saveTorneo($id, $nombreTorneo, $organizador, $patrocinadores, $sede, $categoria,
    $premio1, $premio2, $premio3, $otroPremio, $usuario, $contrasena);
?>