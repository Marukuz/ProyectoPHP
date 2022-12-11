<?php

/**
 * Usuarios
 * 
 * Clase donde almacenamos todo lo referente a las vistas de usuario.
 * 
 */
class Usuarios{
    
    /**
     * loguearse
     *
     * Funcion para la vista loguin que identifica si el usuario y 
     * contraseña introducido es valido y renderiza la vista correspondiente
     * @return void
     */
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
    
    /**
     * verUsuarios
     *
     * Funcion para almacenar todos los usuarios existentes en la BBDD en una variable y renderizarlo.
     * 
     * @return void
     */
    public static function verUsuarios(){
        require('models/blade.php');
        require('models/ConsultasUsuarios.php');

        $mostrarUsuarios = ConsultasUsuarios::verUsuarios();
        
        echo $blade->render('listausuarios',[
            'usuarios'=>$mostrarUsuarios
        ]);
    }
    
    /**
     * añadirUsuario
     *
     * Funcion para añadir un usuario enviado desde el formulario y seguidamente si pasa el filtrado añadirlo a la BBDD
     * @return void
     */
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
        
    /**
     * eliminarUsuarioVista
     *
     * Funcion para renderizar la tarea que queremos eliminar y elegir si queremos eliminarla o no.
     * 
     * @return void
     */
    public static function eliminarUsuarioVista(){
        require('models/ConsultasUsuarios.php');
        require('models/blade.php');
        
        $id = $_GET['id'];
        $usuario = ConsultasUsuarios::mostrarUsuarioID($id);

        echo $blade->render('eliminarUsuario', [
            'usuario'=>$usuario        
        ]);
    }
        
    /**
     * eliminarUsuario
     *
     * Funcion que elimina el usuario que le pasamos por $id
     * @return void
     */
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
    
    /**
     * modificarUsuario
     *
     * Funcion que nos permite modificar un usuario si pasa el filtrado de errores.
     * @return void
     */
    public static function modificarUsuario(){
        require('models/ConsultasUsuarios.php');
        require('models/blade.php');
        require('models/gestorerrores.php');
        require('validaciones.php');

        $id = $_GET['id'];

        $usuario = ConsultasUsuarios::mostrarUsuarioID($id);
        $error=new GestorErrores('<span style="color: red;">','</span>');

        if($_POST){
            Validaciones::filtradoUsuarios($error,$_POST['nombre'],$_POST['contraseña'],filter_input(INPUT_POST,'rol'));
            if(!$error->HayErrores()){
                ConsultasUsuarios::modificarUsuario($id,$_POST["nombre"],$_POST["contraseña"],filter_input(INPUT_POST,'rol'));
                echo $blade->render('modificarUsuario',[
                    'usuario'=>$usuario, 'error'=>$error,'usuario'=>$usuario
                ]);
            }else{
                echo $blade->render('modificarUsuario',[
                    'usuario'=>$usuario, 'error'=>$error,'usuario'=>$usuario
                ]);
            }
        }else{
            echo $blade->render('modificarUsuario',[
                'usuario'=>$usuario, 'error'=>$error,'usuario'=>$usuario
            ]);
        }
    }
}