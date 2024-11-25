<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN ERROR</title>
    <link rel="shortcut icon" href="./media/favicon.png" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="./css/estiloseU.css">
</head>

<body>
    <div class="centrar">

        <div class="contenedor">

            <h1 class="titulologin">LOGIN ERROR</h1>

            <div>
                <form style="text-align: center;" method="post" action="logica/loguear.php">
                    <input type="text" name="numero_cuenta" placeholder="Numero de Cuenta" />
                    <br />
                    <input type="password" name="clave" placeholder="Contraseña" />
                    <br />
                    <button type="submit" class="btn waves-effect waves-light red accent-4">INICIAR SESION</button>
                </form>
            </div>

        </div>

    </div>



</body>

</html>