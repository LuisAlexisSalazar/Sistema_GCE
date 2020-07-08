<?php include_once "../encabezado_director.php" ?>

<form action="regisp.php" method="post">
    
    <input type="text" name="nombre" placeholder="Nombre">
    <input type="text" name="apellido" placeholder="Apellido">
    <input type="text" name="usuario" placeholder="Usuario">
    <input type="password" name="passw" placeholder="Password">


    <br>
    <br>
    Estado
    <input type="checkbox" name="status"> Activo/Inactivo
    <br>
    <br>
    
    <input type="submit" value="Registrar" id="regis_p">

</form> 