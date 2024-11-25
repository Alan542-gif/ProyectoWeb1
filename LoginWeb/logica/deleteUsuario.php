<?php
require "conexion.php";
mysqli_set_charset($conexion,'utf8');
$registroEliminado=$_POST['numero_cuenta'];
$consulta="DELETE FROM usuariogym WHERE numero_cuenta = ";

mysqli_query($conexion, $consulta . $registroEliminado);
mysqli_close($conexion);
header('Location: ../eliminarUsuario.php');
?>



