<?php

//conexion con la base de datos uasndo Programacion Orientacion a Objetos
include_once "conexion.php";

//Valores del Formulario Recibido
$nombre=$_POST['nombre'];
$contrasena=$_POST['passw'];


//query
$sql="SELECT r.nombre as nombre_rol FROM persona as p 
        NATURAL JOIN credencial as c
        INNER JOIN roles as r ON (r.id_credencial=c.id_credencial) 
    WHERE p.nombre='$nombre' and c.contrasena='$contrasena'";



//ejecucion de la query
$resultado = $base_de_datos->query($sql);

//$filas=$resultado->rowCount();

$registrados = $resultado->fetchAll(PDO::FETCH_OBJ);

//recorrido por registro en si un "Cursor"
foreach($registrados as $registro){
  
    if ($registro->nombre_rol == "director" )
        header("location:pagina_director.html");
    

    elseif ($registro->nombre_rol == "alumno" ) 
        header("location:pagina_alumno.html");
    

    elseif ($registro->nombre_rol == "profesor" )
        header("location:pagina_profesor.html");
    
}


echo '<script type="text/javascript">
alert("Contraseña o Usuario Incorrecto");
window.location.href="index.html";
</script>';



?>



                



