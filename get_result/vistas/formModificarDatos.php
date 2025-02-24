<?php
session_start();
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Datos</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <form action="ModificarDatos.php" method="POST">
        <?php
            echo '<input type="text" name="nombre" value="'.$_SESSION['nombre'].'">';
            echo '<input type="text" name="telefono" value="'.$_SESSION['telefono'].'">';
        ?>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
