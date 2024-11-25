<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Usuario</title>
    <link rel="shortcut icon" href="./media/favicon.png" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="./css/estilosr.css">
</head>

<body class="fondo1">
    <div class="contenedor">
        <header>
            <h3 class="titulo">Registrar en GYM</h3>
        </header>
        <form action="./logica/enviarRegistro.php" method="post" class="card">
            <div class="card-content">
                <div class="input-field">
                    <input id="nombre_usuario" type="text" name="nombre_usuario" required maxlength="100" placeholder="Ingresa tu nombre">
                    <label for="nombre_usuario">Nombre del usuario</label>
                </div>
                <div class="input-field">
                    <input id="numero_cuenta" type="text" name="numero_cuenta" required maxlength="100" placeholder="Ingresa tu número de cuenta">
                    <label for="numero_cuenta">Número de cuenta</label>
                </div>
                <div class="input-field">
                    <input id="tipo_membresia" type="text" name="tipo_membresia" required maxlength="100" placeholder="Ingresa tu tipo de membresía">
                    <label for="tipo_membresia">Tipo de membresía</label>
                </div>
                <div class="input-field">
                    <input id="direccion" type="text" name="direccion" required maxlength="100" placeholder="Ingresa tu dirección particular">
                    <label for="direccion">Dirección particular</label>
                </div>
                <div class="input-field">
                    <input id="telefono" type="text" name="telefono" required maxlength="8" placeholder="Ingresa tu teléfono">
                    <label for="telefono">Teléfono</label>
                </div>
                <div class="input-field">
                    <input id="email" type="email" name="email" required maxlength="100" placeholder="Ingresa tu correo">
                    <label for="email">Correo</label>
                </div>
                <div class="input-field">
                    <input id="password" type="password" name="password" required maxlength="15" placeholder="Ingresa tu contraseña">
                    <label for="password">Contraseña</label>
                </div>
            </div>
            <div class="card-action">
                <button type="submit" name="submit" class="btn waves-effect waves-light black">Enviar registro</button>

                <a href="index.php" class="btn waves-effect waves light red accent-4" style="text-align: center;">SALIR</a>
            </div>
        </form>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>