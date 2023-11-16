<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuario</title>
</head>
<body>
    <h2>Registro</h2>
    <form action="register_user.php" method="post">
        <label for="alias">Alias:</label>
        <input type="text" name="alias" required><br>

        <label for="clave">Clave:</label>
        <input type="password" name="clave" required><br>

        <label for="confirmar_clave">Confirmar clave:</label>
        <input type="password" name="confirmar_clave" required><br>

        <button type="submit">Enviar</button>
    </form>

    <p>¿Ya tienes una cuenta? <a href="index.php">INGRESA AQUÍ</a>.</p>
</body>
</html>