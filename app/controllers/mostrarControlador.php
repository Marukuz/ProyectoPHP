<?php

function mostrar(){
    //Incluimos modelo
    require('models/mostrar.php');
    include('models/varios.php');
    $tareas = new Tareas();
    $mostrarTareas = $tareas->mostrarTareas();
    //Incluimos vista
    //Pasamos a la vista toda la información que se desea representar
    //include("app/views/tareas_mostrar.php");
    echo $blade->render('listatareas', [
        'mostrarTareas'=>$mostrarTareas        
    ]);
}
