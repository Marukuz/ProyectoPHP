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

    public static function verUsuarios(){
        require('models/blade.php');

        echo $blade->render('listausuarios');
    }
}