<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini CompuTrabajo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Registro de Usuarios</h2>
        <form action="guardar_usuario.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nombre_re" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre_re" name="nombre_re" required>
            </div>
            <div class="mb-3">
                <label for="dni" class="form-label">DNI:</label>
                <input type="text" class="form-control" id="dni" name="dni" maxlength="8" required>
            </div>
            <div class="mb-3">
                <label for="ruc" class="form-label">RUC:</label>
                <input type="text" class="form-control" id="ruc" name="ruc" maxlength="11" required>
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo Electrónico:</label>
                <input type="email" class="form-control" id="correo" name="correo" required>
            </div>
            <div class="mb-3">
                <label for="celular" class="form-label">Celular:</label>
                <input type="text" class="form-control" id="celular" name="celular">
            </div>
            <div class="mb-3">
                <label for="rol" class="form-label">Rol:</label>
                <select class="form-control" id="rol" name="rol" required>
                    <option value="1">Admin</option>
                    <option value="2">Empresa</option>
                    <option value="3">Postulante</option>
                    <option value="4">Supervisor</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="user" class="form-label">Usuario:</label>
                <input type="text" class="form-control" id="user" name="user" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="archivo_cv" class="form-label">Subir CV:</label>
                <input type="file" class="form-control" id="archivo_cv" name="archivo_cv">
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
