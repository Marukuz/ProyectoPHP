<?php

class Tareas{

    public static function login(){
        require('models/blade.php');
        echo $blade->render('login');
    }
    
    public static function mostrarTareas(){
        //Incluimos modelo
        require('models/Consultas.php');
        require('models/blade.php');
        $mostrarTareas = Consultas::mostrarTareas();
        //Incluimos vista
        echo $blade->render('listatareas', [
            'mostrarTareas'=>$mostrarTareas        
        ]);
    }
    public static function mostrarTareasPendientes(){
        require('models/Consultas.php');
        require('models/blade.php');
        $mostrarTareasPendientes = Consultas::mostrarTareasPendientes();
        echo $blade->render('listatareaspendientes', [
            'mostrarTareasPendientes'=>$mostrarTareasPendientes       
        ]);
    }
    
    public static function mostrarTareaCompleta(){
        require('models/Consultas.php');
        require('models/blade.php');
        $id = $_GET['id'];
        $mostrarTareaCompleta = Consultas::mostrarTareaCompleta($id);
        echo $blade->render('tareacompleta', [
            'mostrarTareaCompleta'=>$mostrarTareaCompleta       
        ]);
    }
    
    public static function modificarTarea(){
        require('models/Consultas.php');
        require('models/blade.php');
        require('models/gestorerrores.php');
        require('validaciones.php');
    
        $id = $_GET['id'];
    
        $tarea = Consultas::mostrarTareaCompleta($id);
        $error=new GestorErrores('<span style="color: red;">','</span>');
        $provincias = Consultas::mostrarProvincias();
    
        if($_POST){
            $error = Validaciones::filtradoTareas($error,$_POST["dni"],$_POST["nombre"],$_POST["apellido"],$_POST["correo"],$_POST["telefono"],$_POST["direccion"],$_POST["poblacion"],$_POST["codigop"],filter_input(INPUT_POST,'provincia'),filter_input(INPUT_POST,'operario'),$_POST["fecha"],$_POST["descripcion"],$_POST["anotacioni"]);
            if(!$error->HayErrores()){
                Consultas::modificarTarea($_POST["id"],$_POST["dni"],$_POST["nombre"],$_POST["apellido"],$_POST["telefono"],$_POST["correo"],$_POST["direccion"],$_POST["poblacion"],$_POST["codigop"],filter_input(INPUT_POST,'provincia'),filter_input(INPUT_POST,'estado'),filter_input(INPUT_POST,'operario'),$_POST["fecha"],$_POST["descripcion"],$_POST["anotacioni"],$_POST["anotacionf"]);
                echo $blade -> render('modificarTarea', [
                    'error'=>$error, 'provincias'=>$provincias,'tarea'=>$tarea
                ]);
            }else{
                echo $blade -> render('modificarTarea', [
                    'error'=>$error, 'provincias'=>$provincias, 'tarea'=>$tarea
                ]);
            }
        }else{
            echo $blade->render('modificarTarea', [
                'tarea'=>$tarea,'provincias'=>$provincias,'error'=>$error
            ]);
        }
        
    }
    
    public static function añadirTarea(){
        //Incluimos modelo
        require('models/Consultas.php');
        require('models/blade.php');
        require('models/gestorerrores.php');
        require('validaciones.php');
        //FILTRADO 
    
        $provincias = Consultas::mostrarProvincias();
    
        $error=new GestorErrores('<span style="color: red;">','</span>');
    
        if($_POST){
            $error = Validaciones::filtradoTareas($error,$_POST["dni"],$_POST["nombre"],$_POST["apellido"],$_POST["correo"],$_POST["telefono"],$_POST["direccion"],$_POST["poblacion"],$_POST["codigop"],filter_input(INPUT_POST,'provincia'),filter_input(INPUT_POST,'operario'),$_POST["fecha"],$_POST["descripcion"],$_POST["anotacioni"]);
            $tareas = [];
            array_push($tareas,$_POST["dni"],$_POST["nombre"],$_POST["apellido"],$_POST["correo"],$_POST["telefono"],$_POST["direccion"],$_POST["poblacion"],$_POST["codigop"],filter_input(INPUT_POST,'provincia'),filter_input(INPUT_POST,'operario'),$_POST["fecha"],$_POST["descripcion"],$_POST["anotacioni"]);
            if(!$error->HayErrores()){
                Consultas::añadirTarea($_POST["dni"],$_POST["nombre"],$_POST["apellido"],$_POST["correo"],$_POST["telefono"],$_POST["direccion"],$_POST["poblacion"],$_POST["codigop"],filter_input(INPUT_POST,'provincia'),filter_input(INPUT_POST,'operario'),$_POST["fecha"],$_POST["descripcion"],$_POST["anotacioni"]);
                echo $blade -> render('añadirTarea', [
                    'error'=>$error, 'tareas'=>$tareas, 'provincias'=>$provincias
                ]);
            }else{
                echo $blade -> render('añadirTarea', [
                    'error'=>$error, 'tareas'=>$tareas, 'provincias'=>$provincias
                ]);
            }
        }else{
            echo $blade -> render('añadirTarea', [
                'error'=>$error,'provincias'=>$provincias
            ]);
        }
    }
    public static function eliminarTareaVista(){
        require('models/Consultas.php');
        require('models/blade.php');
        
        $id = $_GET['id'];
    
        $tarea = Consultas::mostrarTareaID($id);
        echo $blade->render('eliminarTarea', [
            'tarea'=>$tarea        
        ]);
    }
    
    public static function eliminarTarea(){
        require('models/Consultas.php');
        require('models/blade.php');
    
        $id = $_GET['id'];
    
        Consultas::eliminarTarea($id);
        $mostrarTareas = Consultas::mostrarTareas();
    
        echo $blade->render('listatareas',[
            'mostrarTareas'=>$mostrarTareas
        ]);
    }
    public static function completarTarea(){
        require('models/Consultas.php');
        require('models/blade.php');
        
        $id = $_GET['id'];
        $tarea = Consultas::mostrarTareaCompleta($id);
        if($_POST){
            Consultas::completarTarea($id,$_POST["estado"],$_POST["anotacioni"],$_POST["anotacionf"]);
            
        }else{
            echo $blade->render('completarTarea',[
                'tarea'=>$tarea
            ]);
        }

        
    }
    
}
