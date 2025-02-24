<?php
class MInicioSesion {
    private $conexion;
    
    public function __construct() {
        require_once '../config/config.php';
        $this->conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
        $this->conexion->set_charset("utf8");

        if ($this->conexion->connect_error) {
            die("Conexión fallida: " . $this->conexion->connect_error);
        }
        // Activar modo de excepciones
        $this->conexion->report_mode = MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT;
    }

    public function mComprobarSesion($correo, $password) {
        $SQL = "SELECT * FROM usuarios WHERE correo = ? AND contraseña = ?";
        $stmt = $this->conexion->prepare($SQL);
        $stmt->bind_param("ss", $correo, $password);
        $stmt->execute();
        return $stmt->get_result();
    }

    public function mModificardatos($nombre, $telefono) {
        $SQL = "UPDATE usuarios SET nombre = ?, telefono = ? WHERE idUsuario = ?";
        $stmt = $this->conexion->prepare($SQL);
        $stmt->bind_param("ssi", $nombre, $telefono, $_SESSION['idUsuario']);
        return $stmt->execute();
    }

    public function mCambiarContrasena($password) {
        $SQL = "UPDATE usuarios SET contraseña = ? WHERE idUsuario = ?";
        $stmt = $this->conexion->prepare($SQL);
        $stmt->bind_param("si", $password, $_SESSION['idUsuario']);
        return $stmt->execute();
    }
}
?>
