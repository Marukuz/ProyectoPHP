<?php
require_once('conexionPDO.php');

/**
 * ConsultasUsuarios
 * 
 * Clase donde hacemos todas las consultas a la base de datos relacionadas con los Usuarios.
 * 
 */
class ConsultasUsuarios{
    
    /**
     * getUsuario
     *
     * Funcion donde pedimos un usuario donde el nombre y contraseña coincidan con el pasado por parametro y lo devolvemos.
     * 
     * @param  mixed $nombre
     * @param  mixed $contrase
     * @return void
     */
    public static function getUsuario($nombre,$contraseña){
        $base = Conexion::getInstance();
        $sql="SELECT * FROM usuarios WHERE nombre='$nombre' AND contraseña='$contraseña'";
        $result =$base->base->prepare($sql);
        $result -> execute();
        return $result->fetch(PDO::FETCH_ASSOC);
    }
        
    /**
     * verUsuarios
     *
     * Funcion donde cojemos todos los usuarios existentes de la base de datos y los devolvemos mediante un array.
     * 
     * @return void
     */
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
        
    /**
     * añadirUsuario
     *
     * Funcion donde añadimos a la base de datos un usuario con los datos pasados por parametro.
     * 
     * @param  mixed $nombre
     * @param  mixed $password
     * @param  mixed $rol
     * @return void
     */
    public static function añadirUsuario($nombre,$password,$rol){
        $base = Conexion::getInstance();
        $sql="INSERT INTO `usuarios`(`usuario_id`,`nombre`, `contraseña`, `rol`) VALUES (NULL,'$nombre','$password','$rol')";
        $result =$base->base->prepare($sql);
        $result -> execute();
    }
        
    /**
     * mostrarUsuarioID
     *
     * Funcion donde mostramos un usuario en especifico mediante la id que pasamos por parametro
     * @param  mixed $id
     * @return void
     */
    public static function mostrarUsuarioID($id){
        $base = Conexion::getInstance();
        $sql="SELECT * FROM usuarios WHERE usuario_id='$id'";
        $result = $base->base->prepare($sql);
        $result -> execute();
        return $result->fetch(PDO::FETCH_ASSOC);
    }
        
    /**
     * eliminarUsuario
     *
     * Funcion que elimina un usuario en concreto el cual identificamos mediante el parametro que pasamos.
     * 
     * @param  mixed $id
     * @return void
     */
    public static function eliminarUsuario($id){        
        $base = Conexion::getInstance();
        $sql="DELETE FROM usuarios WHERE usuario_id='$id'";
        $result = $base->base->prepare($sql);
        $result -> execute();
    }
    
    /**
     * modificarUsuario
     *
     * Funcion que nos permite modificar un usuario mediante los parametros recibidos.
     * @param  mixed $id
     * @param  mixed $nombre
     * @param  mixed $contrase
     * @param  mixed $rol
     * @return void
     */
    public static function modificarUsuario($id,$nombre,$contraseña,$rol){
        $base = Conexion::getInstance();
        $sql="UPDATE usuarios SET usuario_id='$id', nombre='$nombre',contraseña='$contraseña',rol='$rol' WHERE usuario_id='$id'";
        $result = $base->base->prepare($sql);
        $result -> execute();
        return $result->fetch(PDO::FETCH_ASSOC);

    }
}