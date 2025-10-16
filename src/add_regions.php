<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "market-app"; 

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) { die("Conexión fallida: " . $conn->connect_error); }

$name = $_POST['name'];
$country_id = $_POST['country_id'];

$sql = "INSERT INTO regions (name, country_id) VALUES ('$name','$country_id')";

if ($conn->query($sql) === TRUE) {
    echo " Región registrada correctamente";
} else {
    echo " Error: " . $conn->error;
}
$conn->close();
?>