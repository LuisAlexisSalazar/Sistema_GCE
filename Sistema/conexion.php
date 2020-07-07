<?php



$password = "";
$user="root";
$host="localhost";
$bd = "insituto";


try{
    $base_de_datos = new PDO("mysql:host=$host;dbname=$bd;", $user, $password);

   
    $base_de_datos->query("set names utf8;");
     
    $base_de_datos->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base_de_datos->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    
}


catch(Exception $e){
    echo "Ocurrió algo con la base de datos: " . $e-getMessage();
}



?>