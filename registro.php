<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>

<body>

    <header>
        <h3> Registro en mi BD </h3>
    </header>

    <div>
        <form action="./enviarRegistro.php" method="post">

            <hr>
            <div>
                <label for="nombre_usuario"> Ingresa el nombre del usuario : </label>
                <input type="text" name="nombre_usuario" required maxlength="100" placeholder=" Ingresa tu nombre ">
                <br></br>

                <label for="numero_cuenta"> Numero de cuenta: </label>
                <input type="text" name="numero_cuenta" required maxlength="100" placeholder="Ingresa tu numero de cuenta">
                <br></br>

                <label for="tipo_membresia"> Ingresa el tipo de membresia : </label>
                <input type="text" name="tipo_membresia" required maxlength="100" placeholder=" Ingresa tu tipo de membresia ">
                <br></br>

                <label for="direccion"> Direccion particular : </label>
                <input type="text" name="direccion" required maxlength="100" placeholder="Ingresa tu direccion particular">
                <br></br>

                <label for="telefono"> Telefono : </label>
                <input type="text" name="telefono" required maxlength="8" placeholder="Ingresa tu telefono">
                <br></br>

                <label for="email"> Correo : </label>
                <input type="mail" name="email" required maxlength="100" placeholder="Ingresa tu correo">
                <br></br>

                <label for="password"> Contraseña : </label>
                <input type="password" name="password" required maxlength="15" placeholder="Ingresa tu contraseña">
                <br></br>

            </div>
            <button type="submit" name="submit"> Enviar registro </button>

        </form>
    </div>

</body>

</html>

<a href='registro.php'> Nuevo registro </a>
<br>
<a href='index.php'> Ver registros </a>