<?php
    class Minsercion {
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

        public function mInsertar() {
            $sql = $this->conexion->prepare("INSERT INTO usuarios(correo,contraseña,nombre,telefono) VALUES (?,?,?,?)");
            $sql->bind_param("ssss", $correo,$contrasena,$nombre,$telefono);
            $usuarios = [
                ["usuario1@example.com", "pass123", "Juan Pérez", "123456789"],
                ["usuario2@example.com", "clave456", "María Gómez", "987654321"],
                ["usuario3@example.com", "segura789", "Carlos López", "654321987"]
            ];
            
            foreach ($usuarios as $usuario) {
                $correo = $usuario[0];
                $contrasena = $usuario[1];
                $nombre = $usuario[2];
                $telefono = $usuario[3];
                if(!$sql->execute()){
                return false;
                }
            }
            return true;
        }
    }
?>