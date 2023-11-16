<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo</title>
</head>

<body>
    <h2>Registro</h2>
    <form action="ingreso.php" method="post">
        <label for="alias">Alias:</label>
        <input type="text" name="alias" required><br>

        <label for="clave">Clave:</label>
        <input type="clave" name="clave" required><br>

        <button type="submit">Ingresar</button>
    </form>

    <p>Si no tienes una cuenta, <a href="register.php">REGÍSTRATE AQUÍ</a>.</p>
</body>

</html>