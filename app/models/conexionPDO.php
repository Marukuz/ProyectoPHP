<?php 

/**
 * Conexion
 * 
 * Clase para instanciar la conexion con el metodo singleton a la base de datos mediante PDO.
 */
class Conexion{
    
    public $base;
    private static $instance;
    
    /**
     * __construct
     *
     * Instanciamos una nueva conexion mediante PDO.
     * 
     */
    public function __construct (){
        $this->base = new PDO('mysql:host=localhost;dbname=proyecto','root','');
    }
        
    /**
     * getInstance
     *
     * Llamamos a la instancia y si no existe la creamos seguidamente para retornarla.
     */
    public static function getInstance(){
        if(!isset(self::$instance)){
            $conex = __CLASS__;
            self::$instance = new $conex;
        }
        return self::$instance;
    }
}

