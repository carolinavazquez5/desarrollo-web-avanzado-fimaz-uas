<?php
require_once "Usuario.php";
class Admin extends Usuario {
    private $Nombre;
    private $Correo;
    private $Rol;

    public function __construct($nombre, $correo, $rol) {
        $this->Nombre=$nombre;
        $this->Correo=$correo;   
        $this->Rol=$rol;
    }

    function getNombre()
    {
        return $this->Nombre;
    }

    function getCorreo()
    {
        return $this->Correo;
    }

    public function getRol()
    {
        return $this->Rol;
    }

}
?>