<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Usuario</title>
    <link rel="shortcut icon" href="./media/favicon.png" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./css/estiloseU.css">
</head>

<body>
    <div class="centrar">
        <div class="contenedor">
            <h1 class="titulo">Eliminar Usuario</h1>
            <form style="text-align:center;" method="post" action="./logica/deleteUsuario.php">
                <input type="text" name="numero_cuenta" placeholder="Numero de Cuenta" required />
                <br />
                <button type="submit" class="btn waves-effect waves-light red accent-4">Eliminar Usuario</button>
                <br>
                <br>
                <a href="principal.php" class="btn waves-effect waves light grey" style="text-align: center;">Lista de usuarios</a>
        </div>
        </form>
    </div>
</body>

</html>