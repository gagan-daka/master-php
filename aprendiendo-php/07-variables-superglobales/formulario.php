<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con php</title>
</head>

<body>
    <!--CON EL METODO GET APARECE EN LA URL-->
    <!--CON EL METODO POST NO APARECE EN LA URL-->
    <h1>Formulario en PHP</h1>
    <!--<form method="GET" action="recibir.php">-->
    <form method="POST" action="recibir.php">
        <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
        </p>

        <p>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos">
        </p>

        <input type="submit" value="Enviar">
    </form>
</body>

</html>