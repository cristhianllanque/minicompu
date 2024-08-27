<?php
include 'conexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Eliminar el usuario de la base de datos
    $sql = "DELETE FROM usuarios WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: listar_usuarios.php"); // Redirigir a listar_usuarios.php
        exit();
    } else {
        echo "Error al eliminar el usuario: " . $conn->error;
    }
}

$conn->close();
?>
