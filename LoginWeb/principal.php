<?php
session_start();
$numero_cuenta = $_SESSION['username'];

if (!isset($numero_cuenta)) {
    header("location: ./index.php");
    exit();
}

// Conexión a la base de datos
require "./logica/conexion.php";
mysqli_set_charset($conexion, 'utf8');


$consulta_sql = "SELECT * FROM usuariogym";
$resultado = $conexion->query($consulta_sql);
$count = mysqli_num_rows($resultado);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registros </title>
    <link rel="shortcut icon" href="./media/favicon.png" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./css/estilosp.css">
</head>

<body class="fondo">
    <div class="contenedor">
        <div class="section"><br>
            <h4 class="center-align">Hola, tu número de cuenta es: <strong><?php echo htmlspecialchars($numero_cuenta); ?></strong><br><br></h4>

            <?php if ($count > 0): ?>
                <table class="highlight">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Número de cuenta</th>
                            <th>Tipo de membresía</th>
                            <th>Dirección</th>
                            <th>Teléfono</th>
                            <th>Correo Electrónico</th>
                            <th>Contraseña</th>
                            <th>Fecha de registro</th>
                            <th>Permisos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($resultado)): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['nombre_usuario']); ?></td>
                                <td><?php echo htmlspecialchars($row['numero_cuenta']); ?></td>
                                <td><?php echo htmlspecialchars($row['tipo_membresia']); ?></td>
                                <td><?php echo htmlspecialchars($row['direccion']); ?></td>
                                <td><?php echo htmlspecialchars($row['telefono']); ?></td>
                                <td><?php echo htmlspecialchars($row['email']); ?></td>
                                <td><?php echo htmlspecialchars($row['contraseña']); ?></td>
                                <td><?php echo htmlspecialchars($row['fecha_registro']); ?></td>
                                <td><?php echo htmlspecialchars($row['permisos']); ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <h5 class="red-text center-align">Sin ningún registro</h5>
            <?php endif; ?>

            <div class="center-align">
                <br><br>
                <a href="eliminarUsuario.php" class="btn waves-effect waves-light red accent-4">Eliminar usuario</a>
                <a href="logica/salir.php" class="btn waves-effect waves-light grey">SALIR</a>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>

<?php
mysqli_close($conexion);
?>