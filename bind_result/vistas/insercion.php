<?php
    require_once('../controladores/Cinsercion.php');
    $objinsercion = new Cinsercion();
    $resultado = $objinsercion->cInsertar();
    if($resultado == "Bien insertado"){
        header('Location:InicioSesion.html');
    }else{
        echo "Error en la consulta";
    }
?>