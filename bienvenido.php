<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
    <style>
        body {
            font-family: Arial;
            background: #f1f1f1;
            text-align: center;
            padding-top: 100px;
        }
        .panel {
            background: white;
            display: inline-block;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #aaa;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            color: #5cb85c;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover {
            color: #4cae4c;
        }
    </style>
</head>
<body>
    <div class="panel">
        <h1>Bienvenido, <?php echo $_SESSION['usuario']; ?> 👋</h1>
        <p>Has iniciado sesión correctamente.</p>
        <a href="cerrar.php">Cerrar sesión</a>
    </div>
</body>
</html>
