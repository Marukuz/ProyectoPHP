<?php

function login(){
    require('models/blade.php');
    echo $blade->render('login');
    if($_POST){
        echo $blade->render('listatareas');
    }
}

function mostrarTareas(){
    //Incluimos modelo
    require('models/tareas.php');
    require('models/blade.php');
    $mostrarTareas = Tareas::mostrarTareas();
    //Incluimos vista
    echo $blade->render('listatareas', [
        'mostrarTareas'=>$mostrarTareas        
    ]);
}
function mostrarTareasPendientes(){
    require('models/tareas.php');
    require('models/blade.php');
    $mostrarTareasPendientes = Tareas::mostrarTareasPendientes();
    echo $blade->render('listatareaspendientes', [
        'mostrarTareasPendientes'=>$mostrarTareasPendientes       
    ]);
}

function mostrarTareaCompleta(){
    require('models/tareas.php');
    require('models/blade.php');
    $id = $_GET['id'];
    $mostrarTareaCompleta = Tareas::mostrarTareaCompleta($id);
    echo $blade->render('tareacompleta', [
        'mostrarTareaCompleta'=>$mostrarTareaCompleta       
    ]);
}
function modificarTarea(){
    require('models/tareas.php');
    require('models/blade.php');
    require('models/gestorerrores.php');
    require('validaciones.php');

    $id = $_GET['id'];
    $tarea = Tareas::mostrarTareaCompleta($id);

    $error=new GestorErrores('<span style="color: red;">','</span>');

    $provincias = Tareas::mostrarProvincias();

    if($_POST){
        $error = Validaciones::filtradoTareas($error,$_POST["dni"],$_POST["nombre"],$_POST["apellido"],$_POST["correo"],$_POST["telefono"],$_POST["direccion"],$_POST["poblacion"],$_POST["codigop"],filter_input(INPUT_POST,'provincia'),filter_input(INPUT_POST,'operario'),$_POST["fecha"],$_POST["descripcion"],$_POST["anotacioni"]);
        $tareas = [];
        array_push($tareas,$_POST["dni"],$_POST["nombre"],$_POST["apellido"],$_POST["correo"],$_POST["telefono"],$_POST["direccion"],$_POST["poblacion"],$_POST["codigop"],filter_input(INPUT_POST,'provincia'),filter_input(INPUT_POST,'operario'),$_POST["fecha"],$_POST["descripcion"],$_POST["anotacioni"],$_POST["anotacionf"]);
        if(!$error->HayErrores() == 0){
            Tareas::modificarTarea($_POST["id"],$_POST["dni"],$_POST["nombre"],$_POST["apellido"],$_POST["telefono"],$_POST["correo"],$_POST["direccion"],$_POST["poblacion"],$_POST["codigop"],filter_input(INPUT_POST,'provincia'),$_POST["estado"],filter_input(INPUT_POST,'operario'),$_POST["fecha"],$_POST["descripcion"],$_POST["anotacioni"],$_POST["anotacionf"]);
            echo $blade -> render('modificarTarea', [
                'error'=>$error, 'tareas'=>$tareas, 'provincias'=>$provincias,'tarea'=>$tarea
            ]);
        }else{
            echo $blade -> render('modificarTarea', [
                'error'=>$error, 'tareas'=>$tareas, 'provincias'=>$provincias, 'tarea'=>$tarea
            ]);
        }
    }else{
        echo $blade->render('modificarTarea', [
            'tarea'=>$tarea,'provincias'=>$provincias,'error'=>$error
        ]);
    }
    
}
function test(){
    require('models/tareas.php');
    require('models/blade.php');

    echo $blade->render('opciones');
}

function añadirTarea(){
    //Incluimos modelo
    require('models/tareas.php');
    require('models/blade.php');
    require('models/gestorerrores.php');
    require('validaciones.php');
    //FILTRADO 

    $provincias = Tareas::mostrarProvincias();

    $error=new GestorErrores('<span style="color: red;">','</span>');

    if($_POST){
        $error = Validaciones::filtradoTareas($error,$_POST["dni"],$_POST["nombre"],$_POST["apellido"],$_POST["correo"],$_POST["telefono"],$_POST["direccion"],$_POST["poblacion"],$_POST["codigop"],filter_input(INPUT_POST,'provincia'),filter_input(INPUT_POST,'operario'),$_POST["fecha"],$_POST["descripcion"],$_POST["anotacioni"]);
        $tareas = [];
        array_push($tareas,$_POST["dni"],$_POST["nombre"],$_POST["apellido"],$_POST["correo"],$_POST["telefono"],$_POST["direccion"],$_POST["poblacion"],$_POST["codigop"],filter_input(INPUT_POST,'provincia'),filter_input(INPUT_POST,'operario'),$_POST["fecha"],$_POST["descripcion"],$_POST["anotacioni"]);
        if(!$error->HayErrores()){
            Tareas::añadirTarea($_POST["dni"],$_POST["nombre"],$_POST["apellido"],$_POST["correo"],$_POST["telefono"],$_POST["direccion"],$_POST["poblacion"],$_POST["codigop"],filter_input(INPUT_POST,'provincia'),filter_input(INPUT_POST,'operario'),$_POST["fecha"],$_POST["descripcion"],$_POST["anotacioni"]);
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

