<?php
$host = 'localhost';
$db = 'computrabajo';
$user = 'root'; // Usuario por defecto de XAMPP
$password = ''; // Contraseña por defecto es vacía

$conn = new mysqli($host, $user, $password, $db);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
