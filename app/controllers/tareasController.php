<?php

/**
 * Tareas
 * 
 * Clase donde almacenamos todas las funciones de las tareas.
 */
class Tareas{
    
    /**
     * mostrarTareas
     * Aqui renderizamos la vista y pasamos por parametro las tareas existentes.
     * @return void
     */
    public static function mostrarTareas(){
        //Incluimos modelo
        require('models/ConsultasTareas.php');
        require('models/blade.php');
        $mostrarTareas = ConsultasTareas::mostrarTareas();
        //Incluimos vista
        echo $blade->render('listaTareas', [
            'mostrarTareas'=>$mostrarTareas        
        ]);
    }
        
    /**
     * mostrarTareasPendientes
     * Aqui renderizamos la vista y pasamos por parametro las tareas que estan pendientes.
     * @return void
     */
    public static function mostrarTareasPendientes(){
        require('models/ConsultasTareas.php');
        require('models/blade.php');
        $mostrarTareasPendientes = ConsultasTareas::mostrarTareasPendientes();
        echo $blade->render('listaTareasPendientes', [
            'mostrarTareasPendientes'=>$mostrarTareasPendientes       
        ]);
    }
        
    /**
     * mostrarTareaCompleta
     * Aqui renderizamos la vista y pasamos por parametro una tarea completa en concreto.
     * @return void
     */
    public static function mostrarTareaCompleta(){
        require('models/ConsultasTareas.php');
        require('models/blade.php');
        $id = $_GET['id'];
        $mostrarTareaCompleta = ConsultasTareas::mostrarTareaCompleta($id);
        echo $blade->render('tareacompleta', [
            'mostrarTareaCompleta'=>$mostrarTareaCompleta       
        ]);
    }
        
    /**
     * modificarTarea
     *
     * Aqui renderizamos la vista y filtramos los datos que nos llegan para seguidamente modificarlos en la BBDD.
     * @return void
     */
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
        
    /**
     * añadirTarea
     *
     * Aqui renderizamos la vista y filtramos los datos que nos llegan para seguidamente añadirlos a la BBDD.
     * @return void
     */
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
        
    /**
     * eliminarTareaVista
     *
     * Aqui renderizamos la vista y pasamos por parametro la tarea que hemos seleccionado por id para seguidamente mostrarla.
     * @return void
     */
    public static function eliminarTareaVista(){
        require('models/ConsultasTareas.php');
        require('models/blade.php');
        
        $id = $_GET['id'];
    
        $tarea = ConsultasTareas::mostrarTareaID($id);
        echo $blade->render('eliminarTarea', [
            'tarea'=>$tarea        
        ]);
    }
        
    /**
     * eliminarTarea
     *
     * Aqui cojemos el parametro "id" si anteriormente hemos activado la funcion para eliminar la tarea de la misma id.
     * @return void
     */
    public static function eliminarTarea(){
        require('models/ConsultasTareas.php');
        require('models/blade.php');
    
        $id = $_GET['id'];
    
        ConsultasTareas::eliminarTarea($id);
        $mostrarTareas = ConsultasTareas::mostrarTareas();
    
        echo $blade->render('listaTareas',[
            'mostrarTareas'=>$mostrarTareas
        ]);
    }
        
    /**
     * completarTarea
     *
     * Renderizamos la vista y modificamos los parametros recibidos via $_POST
     * @return void
     */
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
