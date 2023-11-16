<?php
session_start();

if (!isset($_SESSION["alias"])) {
    header("Location: index.php");
    exit();
}

$alias = $_SESSION["alias"];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel usuario</title>
</head>
<body>
    <h2>¡Hola, <?php echo $alias; ?>!</h2>
    <p>Este es tu panel de usuario.</p>
    <a href="logout.php">Cerrar sesión.</a>
</body>
</html>