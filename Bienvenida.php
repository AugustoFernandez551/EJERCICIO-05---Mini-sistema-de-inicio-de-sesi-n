<?php
// Se recibe el nombre del usuario mediante GET, enviado desde validar.php
$nombre = isset($_GET['nombre']) ? $_GET['nombre'] : "Usuario";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 05 - Bienvenida</title>
</head>
<body>
    <h1>¡Bienvenido(a), <?php echo htmlspecialchars($nombre); ?>!</h1>
    <p>Has iniciado sesión correctamente.</p>

    <br>
    <a href="login.php">Cerrar sesión</a>
</body>
</html>
