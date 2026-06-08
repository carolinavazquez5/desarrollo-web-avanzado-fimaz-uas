<?php
 class Usuario{
    private $Nombre;
    private $Correo;

    function __construct($nombre, $correo)
    {
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("El correo no es válido");
        }

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

 }
 ?>