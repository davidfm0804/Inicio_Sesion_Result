<?php
class Cinsercion {
    private $objinsercion;

    public function __construct() {
        require_once '../modelos/Minsercion.php';
        $this->objinsercion = new Minsercion();
    }

    public function cInsertar() {
        if($resultado=$this->objinsercion->mInsertar()){
            return "Bien insertado";
        }else{
            return "Error en la insercion";
        }
    }
}
?>