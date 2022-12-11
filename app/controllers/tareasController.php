<?php

class Tareas{

    
    
    public static function mostrarTareas(){
        //Incluimos modelo
        require('models/ConsultasTareas.php');
        require('models/blade.php');
        $mostrarTareas = ConsultasTareas::mostrarTareas();
        //Incluimos vista
        echo $blade->render('listatareas', [
            'mostrarTareas'=>$mostrarTareas        
        ]);
    }
    public static function mostrarTareasPendientes(){
        require('models/ConsultasTareas.php');
        require('models/blade.php');
        $mostrarTareasPendientes = ConsultasTareas::mostrarTareasPendientes();
        echo $blade->render('listatareaspendientes', [
            'mostrarTareasPendientes'=>$mostrarTareasPendientes       
        ]);
    }
    
    public static function mostrarTareaCompleta(){
        require('models/ConsultasTareas.php');
        require('models/blade.php');
        $id = $_GET['id'];
        $mostrarTareaCompleta = ConsultasTareas::mostrarTareaCompleta($id);
        echo $blade->render('tareacompleta', [
            'mostrarTareaCompleta'=>$mostrarTareaCompleta       
        ]);
    }
    
    public static function modificarTarea(){
        require('models/ConsultasTareas.php');
        require('models/blade.php');
        require('models/gestorerrores.php');
        require('validaciones.php');
    
        $id = $_GET['id'];
    
        $tarea = ConsultasTareas::mostrarTareaCompleta($id);
        $error=new GestorErrores('<span style="color: red;">','</span>');
        $provincias = ConsultasTareas::mostrarProvincias();
    
        if($_POST){
            $error = Validaciones::filtradoTareas($error,$_POST["dni"],$_POST["nombre"],$_POST["apellido"],$_POST["correo"],$_POST["telefono"],$_POST["direccion"],$_POST["poblacion"],$_POST["codigop"],filter_input(INPUT_POST,'provincia'),filter_input(INPUT_POST,'operario'),$_POST["fecha"],$_POST["descripcion"],$_POST["anotacioni"]);
            if(!$error->HayErrores()){
                ConsultasTareas::modificarTarea($_POST["id"],$_POST["dni"],$_POST["nombre"],$_POST["apellido"],$_POST["telefono"],$_POST["correo"],$_POST["direccion"],$_POST["poblacion"],$_POST["codigop"],filter_input(INPUT_POST,'provincia'),filter_input(INPUT_POST,'estado'),filter_input(INPUT_POST,'operario'),$_POST["fecha"],$_POST["descripcion"],$_POST["anotacioni"],$_POST["anotacionf"]);
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
        require('models/ConsultasTareas.php');
        require('models/blade.php');
        require('models/gestorerrores.php');
        require('validaciones.php');
        //FILTRADO 
    
        $provincias = ConsultasTareas::mostrarProvincias();
    
        $error=new GestorErrores('<span style="color: red;">','</span>');
    
        if($_POST){
            $error = Validaciones::filtradoTareas($error,$_POST["dni"],$_POST["nombre"],$_POST["apellido"],$_POST["correo"],$_POST["telefono"],$_POST["direccion"],$_POST["poblacion"],$_POST["codigop"],filter_input(INPUT_POST,'provincia'),filter_input(INPUT_POST,'operario'),$_POST["fecha"],$_POST["descripcion"],$_POST["anotacioni"]);
            $tareas = [];
            array_push($tareas,$_POST["dni"],$_POST["nombre"],$_POST["apellido"],$_POST["correo"],$_POST["telefono"],$_POST["direccion"],$_POST["poblacion"],$_POST["codigop"],filter_input(INPUT_POST,'provincia'),filter_input(INPUT_POST,'operario'),$_POST["fecha"],$_POST["descripcion"],$_POST["anotacioni"]);
            if(!$error->HayErrores()){
                ConsultasTareas::añadirTarea($_POST["dni"],$_POST["nombre"],$_POST["apellido"],$_POST["correo"],$_POST["telefono"],$_POST["direccion"],$_POST["poblacion"],$_POST["codigop"],filter_input(INPUT_POST,'provincia'),filter_input(INPUT_POST,'operario'),$_POST["fecha"],$_POST["descripcion"],$_POST["anotacioni"]);
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
        require('models/ConsultasTareas.php');
        require('models/blade.php');
        
        $id = $_GET['id'];
    
        $tarea = ConsultasTareas::mostrarTareaID($id);
        echo $blade->render('eliminarTarea', [
            'tarea'=>$tarea        
        ]);
    }
    
    public static function eliminarTarea(){
        require('models/ConsultasTareas.php');
        require('models/blade.php');
    
        $id = $_GET['id'];
    
        ConsultasTareas::eliminarTarea($id);
        $mostrarTareas = ConsultasTareas::mostrarTareas();
    
        echo $blade->render('listatareas',[
            'mostrarTareas'=>$mostrarTareas
        ]);
    }
    public static function completarTarea(){
        require('models/ConsultasTareas.php');
        require('models/blade.php');
        
        $id = $_GET['id'];
        $tarea = ConsultasTareas::mostrarTareaCompleta($id);
        if($_POST){
            ConsultasTareas::completarTarea($id,$_POST["estado"],$_POST["anotacioni"],$_POST["anotacionf"]);

        }else{
            echo $blade->render('completarTarea',[
                'tarea'=>$tarea
            ]);
        }

        
    }
    
}
