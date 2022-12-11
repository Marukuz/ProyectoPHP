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
        require('models/ConsultasUsuarios.php');

        $mostrarUsuarios = ConsultasUsuarios::verUsuarios();
        
        echo $blade->render('listausuarios',[
            'usuarios'=>$mostrarUsuarios
        ]);
    }

    public static function añadirUsuario(){
        require('models/ConsultasUsuarios.php');
        require('models/blade.php');
        require('models/gestorerrores.php');
        require('validaciones.php');

        $error=new GestorErrores('<span style="color: red;">','</span>');
        if($_POST){
            Validaciones::filtradoUsuarios($error,$_POST['usuario'],$_POST['password'],filter_input(INPUT_POST,'rol'));
            $usuarios = [];
            array_push($usuarios,$_POST['usuario'],$_POST['password'],filter_input(INPUT_POST,'rol'));
            if(!$error->HayErrores()){
                ConsultasUsuarios::añadirUsuario($_POST['usuario'],$_POST['password'],filter_input(INPUT_POST,'rol'));
                echo $blade->render('añadirusuario',[
                    'error'=>$error,'usuario'=>$usuarios
                ]);
            }else{
                echo $blade->render('añadirusuario',[
                    'error'=>$error,'usuario'=>$usuarios
                ]);
            }

        }else{
            echo $blade->render('añadirusuario',[
                'error'=>$error
            ]);
        }
    }
    public static function eliminarUsuarioVista(){
        require('models/ConsultasUsuarios.php');
        require('models/blade.php');
        
        $id = $_GET['id'];
        $usuario = ConsultasUsuarios::mostrarUsuarioID($id);

        echo $blade->render('eliminarUsuario', [
            'usuario'=>$usuario        
        ]);
    }
    
    public static function eliminarUsuario(){
        require('models/ConsultasUsuarios.php');
        require('models/blade.php');
        $id = $_GET['id'];
        ConsultasUsuarios::eliminarUsuario($id);
        $mostrarUsuarios = ConsultasUsuarios::verUsuarios();
        
        echo $blade->render('listausuarios',[
            'usuarios'=>$mostrarUsuarios
        ]);
    }
}