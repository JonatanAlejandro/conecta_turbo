<?php
include("conexion.php");

// Consultar cursos desde la base de datos
$sql = "SELECT * FROM cursos";
$resultado = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cursos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

<div class="container mt-5">

    <h2 class="text-center mb-4">Cursos de Alfabetización Digital</h2>

    <!-- Lista de cursos desde la base de datos -->
    <div class="row">

        <?php while($curso = mysqli_fetch_assoc($resultado)) { ?>

            <div class="col-md-6 mt-3">

                <div class="card shadow-sm">

                    <div class="card-body">

                        <h4><?php echo $curso['titulo']; ?></h4>

                        <p><?php echo $curso['descripcion']; ?></p>

                        <small><b>Instructor:</b> <?php echo $curso['instructor']; ?></small>

                    </div>

                </div>

            </div>

        <?php } ?>

    </div>

</div>

</body>
</html>