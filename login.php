<?php

session_start();

include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $correo = $_POST['correo'];
    $password = $_POST['password'];

    // Buscar usuario
    $sql = "SELECT * FROM usuarios WHERE correo='$correo'";

    $resultado = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultado) > 0) {

        $usuario = mysqli_fetch_assoc($resultado);

        // Verificar contraseña
        if (password_verify($password, $usuario['password'])) {

            $_SESSION['usuario'] = $usuario['nombre'];

            header("Location: dashboard.php");
            exit();

        } else {

            $error = "Contraseña incorrecta";
        }

    } else {

        $error = "Usuario no encontrado";
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-5">

            <div class="card shadow">

                <div class="card-body">

                    <h2 class="text-center mb-4">
                        Iniciar Sesión
                    </h2>

                    <!-- Mostrar error -->
                    <?php if(isset($error)) { ?>

                        <div class="alert alert-danger">
                            <?php echo $error; ?>
                        </div>

                    <?php } ?>

                    <!-- Formulario -->
                    <form method="POST">

                        <input 
                            type="email" 
                            name="correo"
                            class="form-control mb-3"
                            placeholder="Correo"
                            required
                        >

                        <input 
                            type="password"
                            name="password"
                            class="form-control mb-3"
                            placeholder="Contraseña"
                            required
                        >

                        <button class="btn btn-primary w-100">
                            Ingresar
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

<script src="js/scripts.js"></script>

</body>
</html>