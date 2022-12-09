<?php
require_once 'conexionPDO.php';

class Tareas{

    public static function mostrarTareas() {
        $base = Conexion::getInstance();
        $sql ="SELECT tarea_id, nombre, apellido, telefono, poblacion, provincia, estado_tarea, descripcion, anotacion_inicio, fecha_realizacion FROM tareas ORDER BY fecha_realizacion";
        $result = $base->base->prepare($sql);
        $result->execute();
        $tareas = [];
        while($tarea = $result->fetch()){
            $tareas[] = $tarea;
        }
        return $tareas;
    }   
    public static function mostrarTareasPendientes() {
        //B=Esperando ser aprobada, P=Pendiente, R=Realizada, C=Cancelada
        $base = Conexion::getInstance();
        $sql ="SELECT tarea_id, nombre, apellido, telefono, poblacion, provincia, estado_tarea, descripcion, anotacion_inicio, fecha_realizacion FROM tareas WHERE estado_tarea='P'";
        $result = $base->base->prepare($sql);
        $result->execute();
        $tareas = [];
        while($tarea = $result->fetch()){
            $tareas[] = $tarea;
        }
        return $tareas;
    }

    public static function mostrarTareaCompleta($id){
        $base = Conexion::getInstance();
        $sql="SELECT tarea_id, dni , nombre, apellido, telefono, correo, direccion, poblacion, codigo_postal, provincia, estado_tarea, fecha_creacion, operario_encargado, fecha_realizacion, descripcion, anotacion_inicio, anotacion_final FROM tareas WHERE tarea_id='$id'";
        $result = $base->base->prepare($sql);
        $result->execute();
        $tareas = [];
        while($tarea = $result->fetch()){
            $tareas[] = $tarea;
        }
        return $tareas;
    }

    public static function añadirTarea($dni,$nombre,$apellido,$correo,$telefono,$direccion,$poblacion,$codigop,$provincia,$operario,$fecha,$descripcion,$anotacioni){
        $base = Conexion::getInstance();
        $fechaactual = strval(date('Y-m-d'));
        $sql = "INSERT INTO tareas (`tarea_id`, `dni`, `nombre`, `apellido`, `telefono`, `correo`, `direccion`, `poblacion`, `codigo_postal`, `provincia`, `estado_tarea`, `fecha_creacion`, `operario_encargado`,`fecha_realizacion`,`descripcion`,`anotacion_inicio`,`anotacion_final`) 
        VALUES(NULL,'$dni','$nombre','$apellido','$telefono','$correo','$direccion','$poblacion','$codigop','$provincia','B','$fechaactual','$operario','$fecha','$descripcion','$anotacioni',NULL)";
        $result = $base ->base->prepare($sql);
        $result -> execute();
    }
    public static function modificarTarea($id){
        $base = conex();
        $sql="UPDATE tareas SET tarea_id = '$id', dni='$dni', nombre='$nombre', apellido='$apellido', telefono='$telefono', correo='$correo', direccion='$direccion', poblacion='$poblacion', codigo_postal='$codigop', provincia='$provincia', estado_tarea='$estado', fecha_creacion='$fecha_creacion', operario_encargado='$operario', fecha_realizacion='$fecha_realizacion', anotacion_inicio='$anotacioni', anotacion_final='$anotacionf' WHERE tarea_id='$id'";
            $result =$base->prepare($sql);
            $result -> execute();
    }
    public static function mostrarTareaID($id){
        $base = Conexion::getInstance();
        $sql="SELECT * FROM tareas WHERE tarea_id='$id'";
        $result = $base->base->prepare($sql);
        $result -> execute();
        $tareas = [];
        while($tarea = $result->fetch()){
            $tareas[] = $tarea;
        }
        return $tareas;
    }

    public static function mostrarProvincias(){
        $base = Conexion::getInstance();
        $sql="SELECT * FROM tbl_provincias";
        $result = $base->base->prepare($sql);
        $result -> execute();
        $provincias = [];
        while($provincia = $result->fetch(PDO::FETCH_ASSOC)){
                $provincias[] = $provincia;
           }
        return $provincias;
    }

    public static function paginacion($numero){
        $base = Conexion::getInstance();
        $sql ="SELECT COUNT(*) AS tareas_totales FROM tareas";
        $result = $base->base->prepare($sql);
        $result->execute();
        return ceil($result->fetch(PDO::FETCH_ASSOC)['tareas_totales']/$numero);
    }

    public static function getTareasPag($numero,$pagina){
        $base = Conexion::getInstance();
        
        $limite = ($pagina - 1) * ($numero + 1);

        $sql="SELECT * FROM tareas ORDER BY fecha_realizacion LIMIT $numero OFFSET $limite";
        $result = $base->base->prepare($sql);
        $result -> execute();

        $tareas = [];
        while($tarea = $result->fetch()){
            $tareas[] = $tarea;
        }
        return $tareas;
    }
}