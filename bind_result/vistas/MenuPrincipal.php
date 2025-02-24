<?php
session_start();
if (!isset($_SESSION['nombre'])) {
    header("Location: inicioSesion.php"); // Redirige si no hay sesión iniciada
    exit;
}
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Principal</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <?php
    echo "<h1>Hola, ".$_SESSION['nombre']."</h1>";
    ?>
    <a href="formcambiarContrasena.php" class="btn">Cambiar Contraseña</a>
    <a href="formModificarDatos.php" class="btn">Modificar Datos</a>
    <a href="cerrarSesion.php" class="btn">Cerrar Sesión</a>
</body>
</html>
