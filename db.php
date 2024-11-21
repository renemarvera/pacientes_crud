<?php
$host = 'localhost';
$db = 'pacientes_db';
$user = 'root';
$pass = 'Keeper12!!';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
