<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login UG</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="login-box">
        <img src="logo.png" class="avatar" alt="Logo UG">
        <h1>Iniciar Sesión</h1>
        <form action="validar.php" method="POST">
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" placeholder="Ingresa tu usuario" required>

            <label for="clave">Contraseña</label>
            <input type="password" name="clave" placeholder="Ingresa tu contraseña" required>

            <input type="submit" value="Ingresar">
        </form>
    </div>
</body>
</html>

