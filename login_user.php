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

    $sql = "SELECT * FROM usuarios WHERE alias = '$alias'";
    $result = $conn->query($sql);
    
    $acceso = false;
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($clave, $row['clave'])){
            $acceso = true;
        }
    } 
    if ($acceso) {
        $_SESSION["alias"] = $alias;
        header("Location: dashboard.php");
    } else {
        echo "Alias o clave incorrectas.";
    }
}

$conn->close();
