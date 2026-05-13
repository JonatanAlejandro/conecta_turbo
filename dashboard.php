<?php
session_start();

// (opcional pero recomendado)
// si no hay sesión, lo manda al login
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel Principal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

<div class="container mt-5">

    <!-- Encabezado -->
    <div class="text-center mb-4">
        <h1>ConectaTurbo</h1>
        <p class="text-muted">Plataforma de alfabetización digital</p>
    </div>

    <!-- Tarjetas del sistema -->
    <div class="row">

        <div class="col-md-4 mt-3">
            <div class="card shadow-sm text-center">
                <div class="card-body">

                    <h5>Cursos</h5>
                    <p>Accede a los cursos disponibles</p>

                    <a href="cursos.php" class="btn btn-success">
                        Ver Cursos
                    </a>

                </div>
            </div>
        </div>

        <div class="col-md-4 mt-3">
            <div class="card shadow-sm text-center">
                <div class="card-body">

                    <h5>Evaluaciones</h5>
                    <p>Realiza tus pruebas de conocimiento</p>

                    <a href="evaluacion.php" class="btn btn-warning">
                        Ir a Evaluación
                    </a>

                </div>
            </div>
        </div>

        <div class="col-md-4 mt-3">
            <div class="card shadow-sm text-center">
                <div class="card-body">

                    <h5>Salir</h5>
                    <p>Cerrar sesión del sistema</p>

                    <a href="logout.php" class="btn btn-danger">
                        Cerrar Sesión
                    </a>

                </div>
            </div>
        </div>

    </div>

</div>

</body>
</html>