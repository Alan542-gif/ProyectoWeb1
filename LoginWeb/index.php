<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de GYM</title>
    <link rel="shortcut icon" href="./media/favicon.png" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="./css/estilos.css">
</head>

<body class="fondo">

    <div class="row">

        <div class="col s12 m4 l3">
            <div class="container izquierda">
                <h1>Login de GYM</h1>

                <form method="POST" action="logica/loguear.php">

                    <div class="input-field">
                        <input type="text" id="numero_cuenta" name="numero_cuenta" required>
                        <label for="numero_cuenta">Número de Cuenta</label>
                    </div>

                    <div class="input-field">
                        <input type="password" id="clave" name="clave" required>
                        <label for="clave" class="contraseña">Contraseña</label>
                    </div>

                    <button class="btn waves-effect waves-light grey" type="submit" name="action">Iniciar Sesión
                        <i class="material-icons right">send</i>
                    </button>


                </form>
                <br>
                <a href="registro.php" class="btn waves-effect waves-light grey darken-3">
                    Registrar Usuario
                    <i class="material-icons right">send</i>
                </a>
            </div>
        </div>


        <div class="col s12 m8 l9">

        </div>


    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>