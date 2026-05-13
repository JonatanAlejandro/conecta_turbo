<?php

include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['password'];
    $comunidad = $_POST['comunidad'];

    // Encriptar contraseña
    $contraseña_encriptada = password_hash($contraseña, PASSWORD_DEFAULT);

    // Insertar en la base de datos
    $sql = "INSERT INTO usuarios (nombre, correo, contraseña, comunidad)
            VALUES ('$nombre', '$correo', '$contraseña_encriptada', '$comunidad')";

    if (mysqli_query($conn, $sql)) {

        header("Location: login.php");
        exit();

    } else {

        echo "Error: " . mysqli_error($conn);
    }

} else {

    echo "Acceso no permitido";
}

?>