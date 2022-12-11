<?php

class Usuarios{

    public static function loguearse(){
        require('models/ConsultasUsuarios.php');
        require('models/ConsultasTareas.php');
        require('tareasController.php');
        require('models/blade.php');
        if($_POST){
            if(ConsultasUsuarios::getUsuario($_POST['usuario'],$_POST['password'])){
                $mostrarTareas = ConsultasTareas::mostrarTareas();
                session_start();
                $_SESSION['nombre'] = $_POST['usuario'];
                $_SESSION['fecha'] = time();
                echo $blade->render('listatareas', [
                'mostrarTareas'=>$mostrarTareas        
                ]);
            }else{
                echo $blade->render('login');

            }
        }else{
            echo $blade->render('login');
        }     
    }
    public static function desloguearse(){
        require('models/blade.php');
        session_start();
        session_destroy();
        echo $blade->render('login');
    }
}