<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 05 - Iniciar sesión</title>
</head>
<body>
    <h1>Iniciar sesión</h1>

    <?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
        <p style="color: red;"><strong>Correo o contraseña incorrectos.</strong></p>
    <?php endif; ?>

    <form action="validar.php" method="POST">
        <label for="correo">Correo:</label><br>
        <input type="email" id="correo" name="correo" required><br><br>

        <label for="clave">Clave:</label><br>
        <input type="password" id="clave" name="clave" required><br><br>

        <button type="submit">Ingresar</button>
    </form>
</body>
</html>
