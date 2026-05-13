<?php

$host = "localhost";
$usuario = "root";
$password = "";
$bd = "conecta_turbo";

// Crear conexión
$conn = mysqli_connect($host, $usuario, $password, $bd);

// Verificar conexión
if (!$conn) {
    die("Error de conexión a la base de datos: " . mysqli_connect_error());
}

// Configurar caracteres UTF-8 (importante para tildes y ñ)
mysqli_set_charset($conn, "utf8");

?>