<?php
session_start();
include("conexion.php");

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$sql = "SELECT * FROM usuarios WHERE nombre_usuario='$usuario' AND contrasena='$clave'";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    $_SESSION['usuario'] = $usuario;
    header("Location: bienvenido.php");
} else {
    echo "<h2>Usuario o contraseña incorrectos</h2>";
}
$conn->close();
?>
