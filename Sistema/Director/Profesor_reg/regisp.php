<?php

//conexion con la base de datos uasndo Programacion Orientacion a Objetos
include_once "../../conexion.php";


$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$usuario=$_POST['usuario'];
$password=$_POST['passw'];

if (isset($_POST["status"])) {
    $estado = 1;
 } else {
    $estado = 0;
 }


//---------------------

$sql="INSERT INTO profesor (nombre,apellido,usuario,password,estado) VALUES ('$nombre','$apellido','$usuario','$password','$estado')";

$resultado = $base_de_datos->query($sql);


echo '<script type="text/javascript">
alert("Se registro el profesor de forma correcta");
window.location.href="../funciones_director.php";
</script>';



?>