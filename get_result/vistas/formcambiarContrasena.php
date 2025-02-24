<?php
session_start();
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar Contraseña</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <form action="cambiarContrasena.php" method="POST">
    <?php
        echo '<input type="text" name="password" value="'.$_SESSION['contraseña'].'">';
        echo '<input type="submit" value="Enviar">';
    ?>
    </form>
</body>
</html>
