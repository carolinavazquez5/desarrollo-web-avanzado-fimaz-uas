<?php
class Usuario{
    private $Nombre;
    private $Correo;

    function __construct($nombre, $correo)
    {
        $this->Nombre=$nombre;
        $this->Correo=$correo;
    }

    function getNombre()
    {
        return $this->Nombre;
    }

    function getCorreo()
    {
        return $this->Correo;
    }

    function setNombre(string $nombre)
    {
         $this->Nombre=$nombre;
    }

    function setCorreo(string $correo)
    {
         $this->Correo=$correo;
    }

}
?>