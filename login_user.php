<?php
session_start();

$host = "localhost";
$username = "root";
$password = "";
$database = "ejemplo";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $alias = $_POST["alias"];
    $clave = $_POST["clave"];

    $sql = "SELECT * FROM usuarios WHERE alias = '$alias' AND clave = '$clave'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION["alias"] = $alias;
        header("Location: dashboard.php");
    } else {
        echo "Alias o clave incorrectas.";
    }
}

$conn->close();
