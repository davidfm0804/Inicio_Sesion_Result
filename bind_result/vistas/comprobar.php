<?php
session_start();
require_once('../controladores/CinicioSesion.php');

$objinicio = new CinicioSesion();
$correo = $_POST['correo'];
$password = $_POST['password'];

$resultado = $objinicio->cComprobarSesion($correo, $password);

if ($resultado) { //Si hay datos el usuario existe
    $_SESSION['idUsuario'] = $resultado['idUsuario'];
    $_SESSION['nombre'] = $resultado['nombre'];
    $_SESSION['telefono'] = $resultado['telefono'];
    $_SESSION['contraseña'] = $resultado['contraseña'];

    header('Location: MenuPrincipal.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error de inicio de sesión</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <p>Correo o contraseña incorrectos.</p>
    <a href="InicioSesion.html" class="btn">Volver</a>
</body>
</html>
