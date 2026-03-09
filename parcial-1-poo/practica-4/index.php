<?php

require_once "clases/Admin.php";
require_once "clases/Alumno.php";
require_once "clases/Invitado.php";

$usuarios = [];

try{

    $usuarios[] = new Admin("Carlos Perez", "carlos@gmail.com");

    $usuarios[] = new Alumno("Ana Lopez", "ana@gmail.com", "202401");

    $usuarios[] = new Invitado("Luis Torres", "luis@gmail.com", "Google");

    // Este debe provocar error
    $usuarios[] = new Alumno("Pedro Ruiz", "correo-mal", "202402");

}catch(Exception $e){

    echo "<p><b>Error controlado:</b> ".$e->getMessage()."</p>";

}

?>

<h2>Lista de Usuarios</h2>

<table border="1" cellpadding="8">

<tr>
<th>Nombre</th>
<th>Correo</th>
<th>Rol</th>
<th>Matrícula</th>
<th>Empresa</th>
</tr>

<?php foreach($usuarios as $u){ ?>

<tr>

<td><?php echo $u->getNombre(); ?></td>

<td><?php echo $u->getCorreo(); ?></td>

<td><?php echo $u->getRol(); ?></td>

<td>
<?php
if(method_exists($u,"getMatricula")){
    echo $u->getMatricula();
}else{
    echo "—";
}
?>
</td>

<td>
<?php
if(method_exists($u,"getEmpresa")){
    echo $u->getEmpresa();
}else{
    echo "—";
}
?>
</td>

</tr>

<?php } ?>

</table>