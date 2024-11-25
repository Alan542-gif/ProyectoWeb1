<?php
$host_db = "127.0.0.1:3306";
$user_db = "root";
$pass_db = "";
$db_name = "gymweb";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
    echo "<h1> MySQL no esta dando permisos para dar consultas </h1>";
} else {
    echo "<h2 style='color: green; text-align:center;'> Hola, conexion exitosa. </h2>";
}
