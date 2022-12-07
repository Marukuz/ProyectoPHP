<?php 

class Conexion{
    public $base;
    private static $instance;

    public function __construct (){
        $this->base = new PDO('mysql:host=localhost;dbname=proyecto','root','');
    }
    
    public static function getInstance(){
        if(!isset(self::$instance)){
            $conex = __CLASS__;
            self::$instance = new $conex;
        }
        return self::$instance;
    }
}

