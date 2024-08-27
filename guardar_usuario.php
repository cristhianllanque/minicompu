<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre_re = $_POST['nombre_re'];
    $dni = $_POST['dni'];
    $ruc = $_POST['ruc'];
    $correo = $_POST['correo'];
    $celular = $_POST['celular'];
    $rol = $_POST['rol'];
    $user = $_POST['user'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Encriptar la contraseña

    // Manejo del archivo CV
    $archivo_cv = $_FILES['archivo_cv']['name'];
    $ruta_archivo = 'uploads/' . $archivo_cv;
    move_uploaded_file($_FILES['archivo_cv']['tmp_name'], $ruta_archivo);

    // Insertar datos en la base de datos
    $sql = "INSERT INTO usuarios (nombre_re, dni, ruc, correo, celular, rol, user, password, archivo_cv) 
            VALUES ('$nombre_re', '$dni', '$ruc', '$correo', '$celular', '$rol', '$user', '$password', '$ruta_archivo')";

    if ($conn->query($sql) === TRUE) {
        echo "Usuario registrado con éxito.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
