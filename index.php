<?php

require "conexion.php";
mysqli_set_charset($conexion, 'utf8');



$consulta_sql = "SELECT * FROM usuariogym";


$resultado = $conexion->query($consulta_sql);


$count = mysqli_num_rows($resultado);

echo "<table border = '2'>
    <tr>
        <th> Nombre </th>
        <th> Numero de Cuenta </th>
        <th> Tipo de Membresia </th>
        <th> Direccion </th>
        <th> Telefono </th>
        <th> Correo Electronico </th>
        <th> Contraseña </th>
        <th> Fecha de registro </th>
        <th> Permisos </th>
    </tr>";

if ($count > 0) {

    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";

        echo "<td>" . $row['nombre_usuario'] . "</td>";
        echo "<td>" . $row['numero_cuenta'] . "</td>";
        echo "<td>" . $row['tipo_membresia'] . "</td>";
        echo "<td>" . $row['direccion'] . "</td>";
        echo "<td>" . $row['telefono'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['contraseña'] . "</td>";
        echo "<td>" . $row['fecha_registro'] . "</td>";
        echo "<td>" . $row['permisos'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
?>
    <h1 style='color: red'> Sin nigun registro </h1>
<?php } ?>
<h1><a href='eliminarUsuario.php'> Eliminar Usuario </a></h1>
<h1><a href='registro.php'> Registro </a></h1>