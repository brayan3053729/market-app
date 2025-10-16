<?php
// Conexión directa a la base de datos
$host = "localhost";
$user = "root";
$pass = "";
$db   = "market-app"; 

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$name = $_POST['name'];
$abbr = $_POST['abbr'];
$code = $_POST['code'];

// Insertar en la tabla countries
$sql = "INSERT INTO countries (name, abbr, code) VALUES ('$name', '$abbr', '$code')";

if ($conn->query($sql) === TRUE) {
    echo "País registrado correctamente";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>