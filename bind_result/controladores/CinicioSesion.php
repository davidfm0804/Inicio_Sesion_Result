<?php
class CinicioSesion {
    private $objsesion;

    public function __construct() {
        require_once '../modelos/MinicioSesion.php';
        $this->objsesion = new MinicioSesion();
    }

    public function cComprobarSesion($correo,$password) {
        return $this->objsesion->mComprobarSesion($correo,$password);
    }
    public function cCambiarContrasena($password) {
        session_start();
        return $this->objsesion->mCambiarContrasena($password);
    }
    public function cModificarDatos($nombre,$telefono) {
        session_start();
        return $this->objsesion->mModificarDatos($nombre,$telefono);
    }
}
?>