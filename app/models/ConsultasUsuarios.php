<?php
require_once('conexionPDO.php');
class ConsultasUsuarios{

    public static function getUsuario($nombre,$contraseña){
        $base = Conexion::getInstance();
        $sql="SELECT * FROM usuarios WHERE nombre='$nombre' AND contraseña='$contraseña'";
        $result =$base->base->prepare($sql);
        $result -> execute();
        return $result->fetch(PDO::FETCH_ASSOC);
    }
}