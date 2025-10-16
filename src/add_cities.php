<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "market-app"; 

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) { die("Conexión fallida: " . $conn->connect_error); }

$name = $_POST['name'];
$region_id = $_POST['region_id'];

$sql = "INSERT INTO cities (name, region_id) VALUES ('$name','$region_id')";

if ($conn->query($sql) === TRUE) {
    echo " Ciudad registrada correctamente";
} else {
    echo " Error: " . $conn->error;
}
$conn->close();
?>
