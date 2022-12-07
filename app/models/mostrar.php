<?php
    require ('conexionPDO.php');

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
    } 

?>