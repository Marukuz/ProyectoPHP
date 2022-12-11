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
    
    public static function verUsuarios(){
        $base = Conexion::getInstance();
        $sql="SELECT * FROM usuarios";
        $result =$base->base->prepare($sql);
        $result -> execute();
        $usuarios = [];
        while($usuario = $result->fetch()){
            $usuarios[] = $usuario;
        }
        return $usuarios;
    }
    public static function añadirUsuario($nombre,$password,$rol){
        $base = Conexion::getInstance();
        $sql="INSERT INTO `usuarios`(`usuario_id`,`nombre`, `contraseña`, `rol`) VALUES (NULL,'$nombre','$password','$rol')";
        $result =$base->base->prepare($sql);
        $result -> execute();
    }
}