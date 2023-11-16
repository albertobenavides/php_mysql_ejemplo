<?php
session_start();

$host = "localhost";
$username = "root";
$password = "";
$database = "ejemplo";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $alias = $_POST["alias"];
    $clave = $_POST["clave"];
    $confirmar_clave = $_POST["confirmar_clave"];

    if ($clave !== $confirmar_clave) {
        echo "La contraseña no coincide.";
    } else {
        $sql = "INSERT INTO usuarios (alias, clave) VALUES ('$alias', '$clave')";
        if ($conn->query($sql) === TRUE) {
            echo "Usuario registrado. <a href='index.php'>Ingresa aquí</a>.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
