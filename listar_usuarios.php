<?php
include 'conexion.php'; // Incluir la conexión a la base de datos
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios - Mini CompuTrabajo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Lista de Usuarios Registrados</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>DNI</th>
                    <th>RUC</th>
                    <th>Correo</th>
                    <th>Celular</th>
                    <th>Rol</th>
                    <th>Usuario</th>
                    <th>CV</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Obtener todos los registros de la tabla usuarios
                $sql = "SELECT * FROM usuarios";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Salida de cada fila de datos
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row['id'] . "</td>
                                <td>" . $row['nombre_re'] . "</td>
                                <td>" . $row['dni'] . "</td>
                                <td>" . $row['ruc'] . "</td>
                                <td>" . $row['correo'] . "</td>
                                <td>" . $row['celular'] . "</td>
                                <td>" . getRolName($row['rol']) . "</td>
                                <td>" . $row['user'] . "</td>
                                <td><a href='" . $row['archivo_cv'] . "' target='_blank'>Ver CV</a></td>
                                <td>
                                    <a href='editar_usuario.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'>Editar</a>
                                    <a href='eliminar_usuario.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"¿Estás seguro de eliminar este usuario?\");'>Eliminar</a>
                                </td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='10' class='text-center'>No hay usuarios registrados</td></tr>";
                }

                $conn->close();

                // Función para mostrar el nombre del rol basado en el valor numérico
                function getRolName($rol) {
                    switch ($rol) {
                        case 1:
                            return 'Admin';
                        case 2:
                            return 'Empresa';
                        case 3:
                            return 'Postulante';
                        case 4:
                            return 'Supervisor';
                        default:
                            return 'Desconocido';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
