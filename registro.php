<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <h2>Registro de Usuario</h2>

    <form action="guardar_usuario.php" method="POST">

        <input type="text" name="nombre" class="form-control mb-3" placeholder="Nombre">

        <input type="email" name="correo" class="form-control mb-3" placeholder="Correo">

        <input type="password" name="contraseña" class="form-control mb-3" placeholder="Contraseña">

        <input type="text" name="comunidad" class="form-control mb-3" placeholder="Comunidad">

        <button class="btn btn-success">
            Registrarse
        </button>

    </form>

</div>

</body>
</html>