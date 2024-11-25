<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Usuarios Gym</title>
    <link rel="shortcut icon" href="../media/favicon.png" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="../css/estiloseR.css">
</head>
<body>
    <div class="container">
        <?php
        include "./conexion.php";
        mysqli_set_charset($conexion, 'utf8');
        $nombreUser = $_POST['nombre_usuario'];

        $buscarusuario = "SELECT * FROM usuariogym WHERE nombre_usuario = '$nombreUser'";

        $resultado = $conexion->query($buscarusuario);
        $count = mysqli_num_rows($resultado);
        if ($count == 1) {
            echo "
            <h1 class='black-text'>El usuario ya está registrado</h1>
            <br>
            <br>
            <a href='../registro.php' class='btn waves-effect waves-light black'>Nuevo registro</a>
            <br>
            ";
        } else {
            mysqli_query($conexion, "INSERT INTO usuariogym(
                nombre_usuario, numero_cuenta, tipo_membresia, direccion, telefono, email, contraseña)
                VALUES(
                    '$_POST[nombre_usuario]',
                    '$_POST[numero_cuenta]',
                    '$_POST[tipo_membresia]',
                    '$_POST[direccion]',
                    '$_POST[telefono]',
                    '$_POST[email]',
                    '$_POST[password]'
                )");
            echo "
            <h1 class='black-text'>Usuario creado con éxito</h1>
            <br>
            <a href='../registro.php' class='btn waves-effect waves-light black'>Puedes generar un nuevo registro</a>
            <br>
            <br>
            <br>
            <a href='../principal.php' class='btn waves-effect waves-light black'>Ver registros</a>
            <br>
            ";
        }
        ?>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
