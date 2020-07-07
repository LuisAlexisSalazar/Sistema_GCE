<?php

//conexion con la base de datos uasndo Programacion Orientacion a Objetos
include_once "conexion.php";

//Valores del Formulario Recibido
$nombre=$_POST['nombre'];
$contrasena=$_POST['passw'];


//query


$sql1="SELECT id_alumno as id FROM alumno as a
    WHERE a.usuario='$nombre' and a.password='$contrasena'";

$sql2="SELECT id_profesor as id FROM profesor as p
WHERE p.usuario='$nombre' and p.password='$contrasena'";

$sql3="SELECT id_director as id FROM director as d
WHERE d.usuario='$nombre' and d.password='$contrasena'";



//ejecucion de la query
$resultado2 = $base_de_datos->query($sql1);
$resultado3 = $base_de_datos->query($sql2);
$resultado1 = $base_de_datos->query($sql3);

//$filas=$resultado->rowCount();


    if ($resultado1->rowCount() > 0 )
        header("location:Director/funciones_director.php");
    

    elseif ($resultado2->rowCount() > 0 )
        header("location:Alumno/pagina_alumno.php");
    

    elseif ($resultado3->rowCount() > 0 )
        header("location:Profesor/pagina_profesor.php");
    



echo '<script type="text/javascript">
alert("Contraseña o Usuario Incorrecto");
window.location.href="index.html";
</script>';



?>



                



