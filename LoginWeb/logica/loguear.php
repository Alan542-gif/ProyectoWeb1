<?php
require 'conexion.php';
session_start();

$numero_cuenta = $_POST['numero_cuenta'];
$clave = $_POST['clave'];


$q = "SELECT COUNT(*) as contar from usuariogym where numero_cuenta = '$numero_cuenta' and contraseña = '$clave'";

$consulta = mysqli_query($conexion, $q);

$array = mysqli_fetch_array($consulta);

if($array['contar'] > 0 ) {
     $_SESSION['username'] = $numero_cuenta;

     header("location: ../principal.php");

}else{

    header("location: ../indexError.php");

}
?>