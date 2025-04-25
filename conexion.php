<?php
$servidor = "localhost";
$usuario = "root"; // Cambia si tienes otro usuario
$contrasena = "";  // Cambia si tu MySQL tiene contraseña
$basededatos = "login_ug";

// Crear conexión
$conn = new mysqli($servidor, $usuario, $contrasena, $basededatos);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>