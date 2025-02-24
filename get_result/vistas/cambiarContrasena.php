<?php
require_once('../controladores/CinicioSesion.php');
$objinicio = new CinicioSesion();

if (!empty($_POST['password'])) {
    $password = $_POST['password'];

    if ($resultado = $objinicio->CcambiarContrasena($password)) {
        $_SESSION['contraseña'] = $password;
        $mensaje = 'Contraseña Modificada';
        $url = 'MenuPrincipal.php';
    } else {
        $mensaje = 'No se pudo modificar contraseña';
        $url = 'MenuPrincipal.php';
    }
} else {
    $mensaje = 'No dejes el campo vacío';
    $url = 'formcambiarContrasena.php';
}
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la Modificación de Contraseña</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <h1><?php echo $mensaje; ?></h1>
    <a href="<?php echo $url; ?>" class="btn">Volver</a>
</body>
</html>
