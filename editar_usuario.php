<?php
include 'conexion.php';

// Obtener el ID del usuario a editar
$id = $_GET['id'];

// Consultar los datos del usuario por ID
$sql = "SELECT * FROM usuarios WHERE id = $id";
$result = $conn->query($sql);
$usuario = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre_re = $_POST['nombre_re'];
    $dni = $_POST['dni'];
    $ruc = $_POST['ruc'];
    $correo = $_POST['correo'];
    $celular = $_POST['celular'];
    $rol = $_POST['rol'];
    $user = $_POST['user'];
    
    // Actualizar datos del usuario en la base de datos
    $sql = "UPDATE usuarios SET nombre_re='$nombre_re', dni='$dni', ruc='$ruc', correo='$correo', celular='$celular', rol='$rol', user='$user' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: listar_usuarios.php"); // Redirigir a listar_usuarios.php
        exit();
    } else {
        echo "Error al actualizar: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Editar Usuario</h2>
        <form action="" method="POST">
            <!-- Mismos campos de index.php pero pre-llenados con los datos del usuario -->
            <div class="mb-3">
                <label for="nombre_re" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre_re" name="nombre_re" value="<?php echo $usuario['nombre_re']; ?>" required>
            </div>
            <!-- Resto de los campos... -->
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
