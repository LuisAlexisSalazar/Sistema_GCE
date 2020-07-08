<?php

//conexion con la base de datos uasndo Programacion Orientacion a Objetos
include_once "../../conexion.php";


$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$usuario=$_POST['usuario'];
$password=$_POST['passw'];

/*if (isset($_POST["status"])) {
    $estado = 1;
 } else {
    $estado = 0;
 }*/


//---------------------

$sql="INSERT INTO alumno (nombre,apellido,usuario,password) VALUES ('$nombre','$apellido','$usuario','$password')";

$resultado = $base_de_datos->query($sql);


echo '<script type="text/javascript">
alert("Se registro al alumno de forma correcta");
window.location.href="../funciones_director.php";
</script>';



?>