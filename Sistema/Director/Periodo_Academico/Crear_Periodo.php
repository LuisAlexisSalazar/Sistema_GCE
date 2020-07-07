<?php

//conexion con la base de datos uasndo Programacion Orientacion a Objetos
include_once "../../conexion.php";


$nombre=$_POST['nombre'];

$fecha1=$_POST['inicio'];
$fecha2=$_POST['final'];

$inicio=strtotime($fecha1);
$final=strtotime($fecha2);

$inicio = date('Y-m-d',$inicio); //Lo comvierte a formato de fecha en MySQL

$fin = date('Y-m-d',$fin); //Lo comvierte a formato de fecha en MySQL
//Hacer las comprobaciones que las fechas cumplan con el standar

//---------------------

$sql="INSERT INTO periodo (inicio, final, nombre) VALUES ('$inicio','$fin','$nombre')";

//$resultado = $base_de_datos->query($sql);


echo '<script type="text/javascript">
alert("Se creo el Periodo Academico");
window.location.href="../funciones_director.php";
</script>';



?>