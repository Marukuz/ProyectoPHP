<?php

function login(){
    require('models/blade.php');
    echo $blade->render('login');
    if($_POST){
        echo $blade->render('listatareas');
    }
}

function mostrarTarea(){
    //Incluimos modelo
    require('models/tareas.php');
    require('models/blade.php');
    $mostrarTareas = Tareas::mostrarTareas();
    //Incluimos vista
    echo $blade->render('listatareas', [
        'mostrarTareas'=>$mostrarTareas        
    ]);
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
        $error = Validaciones::filtradoCadena($error,$_POST["dni"],$_POST["nombre"],$_POST["apellido"],$_POST["correo"],$_POST["telefono"],$_POST["direccion"],$_POST["poblacion"],$_POST["codigop"],filter_input(INPUT_POST,'provincia'),filter_input(INPUT_POST,'operario'),$_POST["fecha"],$_POST["descripcion"],$_POST["anotacioni"]);
        $tareas = [];
        array_push($tareas,$_POST["dni"],$_POST["nombre"],$_POST["apellido"],$_POST["correo"],$_POST["telefono"],$_POST["direccion"],$_POST["poblacion"],$_POST["codigop"],filter_input(INPUT_POST,'provincia'),filter_input(INPUT_POST,'operario'),$_POST["fecha"],$_POST["descripcion"],$_POST["anotacioni"]);
        if(!$error->HayErrores()){
            Tareas::añadirTarea($_POST["dni"],$_POST["nombre"],$_POST["apellido"],$_POST["correo"],$_POST["telefono"],$_POST["direccion"],$_POST["poblacion"],$_POST["codigop"],$_POST["provincia"],$_POST["operario"],$_POST["fecha"],$_POST["descripcion"],$_POST["anotacioni"]);
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

function modificarTarea(){
    require('models/tareas.php');
    require('models/blade.php');

    if($_POST){
        echo $blade -> render('modificarTarea');
    }else{
        echo $blade -> render('modificarTareaID');
    }
    
}

