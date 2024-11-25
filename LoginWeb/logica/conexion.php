<?php
//
//
//

//
//
//
//

$host_db = "localhost:3306";
$user_db = "root";
$pass_db = "";
$db_name = "gymweb";


$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);

if($conexion->connect_error){
    echo "<h1> mysqli no esta dando permisos para ejecutar consultas </h1>";
}

?>