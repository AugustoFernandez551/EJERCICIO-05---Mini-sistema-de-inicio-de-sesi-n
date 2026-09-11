<?php
// Arreglo de usuarios registrados en el sistema
$usuarios = [
    [
        "correo" => "admin@gmail.com",
        "clave"  => "123456",
        "nombre" => "Administrador"
    ],
    [
        "correo" => "juan@gmail.com",
        "clave"  => "abc123",
        "nombre" => "Juan Pérez"
    ],
    [
        "correo" => "maria@gmail.com",
        "clave"  => "maria123",
        "nombre" => "María López"
    ]
];

/**
 * Recorre el arreglo de usuarios y verifica si existe una coincidencia
 * exacta de correo y clave.
 *
 * @param array  $usuarios Arreglo de usuarios registrados
 * @param string $correo   Correo ingresado por el usuario
 * @param string $clave    Clave ingresada por el usuario
 * @return array|null Devuelve el usuario encontrado o null si no existe
 */
function buscarUsuario($usuarios, $correo, $clave)
{
    foreach ($usuarios as $usuario) {
        if ($usuario["correo"] === $correo && $usuario["clave"] === $clave) {
            return $usuario;
        }
    }
    return null;
}

// Datos recibidos por POST desde login.php
$correoIngresado = $_POST['correo'];
$claveIngresada  = $_POST['clave'];

// Se busca al usuario con las credenciales ingresadas
$usuarioEncontrado = buscarUsuario($usuarios, $correoIngresado, $claveIngresada);

if ($usuarioEncontrado !== null) {
    // Credenciales correctas: redirige a bienvenida.php enviando el nombre por GET
    header("Location: bienvenida.php?nombre=" . urlencode($usuarioEncontrado["nombre"]));
    exit;
} else {
    // Credenciales incorrectas: redirige nuevamente a login.php con error=1
    header("Location: login.php?error=1");
    exit;
}
