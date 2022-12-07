<?php
//Incluimos modelo
require '../models/mostrar.php';

$tareas = new Tareas();
$mostrarTareas = $tareas->mostrarTareas();

//Incluimos vista
include ('../views/listatareas.php');
