<?php
require 'conexionPDO.php';

class Tareas{

    function mostrarTareas() {
        $base = Conexion::getInstance();
        $sql ="SELECT tarea_id, nombre, apellido, telefono, poblacion, provincia, estado_tarea, anotacion_inicio, fecha_realizacion FROM tareas ORDER BY fecha_realizacion";
        $result = $base->base->prepare($sql);
        $result->execute();
        $tareas = [];
        while($tarea = $result->fetch()){
            $tareas[] = $tarea;
        }
        return $tareas;
    }   
    function añadirTarea($dni,$nombre,$apellido,$correo,$telefono,$direccion,$poblacion,$codigop,$provincia,$operario,$fecha,$descripcion){
        $base = Conexion::getInstance();
        $fechaactual = strval(date('Y-m-d'));
        $sql = "INSERT INTO tareas (`tarea_id`, `dni`, `nombre`, `apellido`, `telefono`, `correo`, `direccion`, `poblacion`, `codigo_postal`, `provincia`, `estado_tarea`, `fecha_creacion`, `operario_encargado`,`fecha_realizacion`,`anotacion_inicio`,`anotacion_final`) 
        VALUES(NULL,'$dni','$nombre','$apellido','$telefono','$correo','$direccion','$poblacion','$codigop','$provincia','B','$fechaactual','$operario','$fecha','$descripcion',NULL)";
        $result = $base ->base->prepare($sql);
        $result -> execute();
    }
}