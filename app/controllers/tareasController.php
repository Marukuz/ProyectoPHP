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
    include('models/blade.php');
    $tareas = new Tareas();
    $mostrarTareas = $tareas->mostrarTareas();
    //Incluimos vista
    echo $blade->render('listatareas', [
        'mostrarTareas'=>$mostrarTareas        
    ]);
}

function añadirTarea(){
    //Incluimos modelo
    require('models/tareas.php');
    include('models/blade.php');
    //Incluimos vista
    echo $blade -> render('añadirTarea');
    //FILTRADO
    require('models/gestorerrores.php');
    $error=new GestorErrores('<span style="color: red;">','</span>');
    if($_POST){
        filtradoCadena($error);
        if(!$error->HayErrores()){
            $tareas = new Tareas();
            $tareas->añadirTarea($_POST["dni"],$_POST["nombre"],$_POST["apellido"],$_POST["correo"],$_POST["telefono"],$_POST["direccion"],$_POST["poblacion"],$_POST["codigop"],$_POST["provincia"],$_POST["operario"],$_POST["fecha"],$_POST["descripcion"]);
        }
    }
    //SI NO HAY ERRORES = POST
    
}

function filtradoCadena($error){
    if(!$_POST["dni"]){
        $error->AnotaError('dni','No has introducido un dni');
    }
    elseif(!ValidarDNI(filter_input(INPUT_POST,'dni'))){
        $error->AnotaError('dni','Formato no valido');
    }   
    if(!$_POST["nombre"]){
        $error->AnotaError('nombre','No has introducido un nombre');
    }
    elseif(!validarNombreApellido($_POST["nombre"])){
        $error->AnotaError('nombre','Formato no valido, no introduzca numeros.');
    }  
    if(!$_POST["apellido"]){
        $error->AnotaError('apellido','No has introducido un apellido');
    }
    elseif(!validarNombreApellido($_POST["apellido"])){
        $error->AnotaError('apellido','Formato no valido, no introduzca numeros.');
    }  
    if(!$_POST["correo"]){
        $error->AnotaError('correo','No has introducido un correo');
    }
    elseif(!validarCorreo(filter_input(INPUT_POST,'correo'))){
        $error->AnotaError('correo','Formato no valido');
    }
    if(!$_POST["telefono"]){
        $error->AnotaError('telefono','No has introducido un telefono');
    }
    elseif(!validarTelefono(filter_input(INPUT_POST,'telefono'))){
        $error->AnotaError('telefono','Formato no valido');
    }   
    if(!$_POST["direccion"]){
        $error->AnotaError('direccion','No has introducido una direccion');
    }
    if(!$_POST["poblacion"]){
        $error->AnotaError('poblacion','No has introducido una poblacion');
    }
    if(!$_POST["codigop"]){
        $error->AnotaError('codigop','No has introducido un codigo postal');
    }
    elseif(!validarCodigop(filter_input(INPUT_POST,'codigop'))){
        $error->AnotaError('codigop','Formato no valido');
    }
    if(empty($_POST["provincia"])){
        $error->AnotaError('provincia','No has seleccionado una provincia');
    }
    if(empty($_POST["operario"])){
        $error->AnotaError('operario','No has seleccionado un operario');
    }
    if(empty($_POST["fecha"])){
        $error->AnotaError('fecha','No has seleccionado una fecha');
    }
    if(!$_POST["descripcion"]){
        $error->AnotaError('descripcion','No has introducido una descripcion');
    }
}
