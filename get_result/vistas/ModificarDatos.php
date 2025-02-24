<?php
require_once('../controladores/CinicioSesion.php');
$objinicio = new CinicioSesion();

if (!empty($_POST['nombre']) && !empty($_POST['telefono'])) {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];

    if ($resultado = $objinicio->cModificarDatos($nombre, $telefono)) {
        $_SESSION['nombre'] = $nombre;
        $_SESSION['telefono'] = $telefono;
        $mensaje = 'Datos Modificados Exitosamente';
        $url = 'MenuPrincipal.php';
    } else {
        $mensaje = 'Hubo un error al modificar los datos';
        $url = 'MenuPrincipal.php';
    }
} else {
    $mensaje = 'No dejes los campos vacíos';
    $url = 'formModificarDatos.php';
}
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de Modificación de Datos</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
        <h2><?php echo $mensaje; ?></h2>
        <a href="<?php echo $url; ?>" class="btn">Volver</a>
</body>
</html>
