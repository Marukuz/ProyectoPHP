<?php
require_once 'conexionPDO.php';

/**
 * ConsultasTareas
 * 
 * Clase donde hacemos todas las consultas a la base de datos relacionadas con las Tareas.
 * 
 */
class ConsultasTareas{
    
    /**
     * mostrarTareas
     *
     * Funcion donde sacamos todos los valores de la tarea que pedimos y las introducimos en un array para devolverlas.
     * @return void
     */
    public static function mostrarTareas() {
        $base = Conexion::getInstance();
        $sql ="SELECT tarea_id, nombre, apellido, telefono, poblacion, provincia, estado_tarea,operario_encargado, descripcion, anotacion_inicio, fecha_realizacion FROM tareas ORDER BY fecha_realizacion";
        $result = $base->base->prepare($sql);
        $result->execute();
        $tareas = [];
        while($tarea = $result->fetch()){
            $tareas[] = $tarea;
        }
        return $tareas;
    }   
        
    /**
     * mostrarTareasPendientes
     *
     * Funcion donde sacamos todas las tareas pendientes de la base de datos y las introducimos en un array para devolverlas.
     * @return void
     */
    public static function mostrarTareasPendientes() {
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
        
    /**
     * mostrarTareaCompleta
     *
     * Funcion donde sacamos la tarea la cual coincide con el id que pasamos por parametro y la devolvemos
     * @param  mixed $id
     * @return void
     */
    public static function mostrarTareaCompleta($id){
        $base = Conexion::getInstance();
        $sql="SELECT tarea_id, dni , nombre, apellido, telefono, correo, direccion, poblacion, codigo_postal, provincia, estado_tarea, fecha_creacion, operario_encargado, fecha_realizacion, descripcion, anotacion_inicio, anotacion_final FROM tareas WHERE tarea_id='$id'";
        $result = $base->base->prepare($sql);
        $result->execute();
        return $result->fetch(PDO::FETCH_ASSOC);
    }
    
    /**
     * añadirTarea
     *
     * En esta funcion insertamos todos los datos recibidos por parametro en la base de datos para crear una nueva tarea.
     * 
     * @param  mixed $dni
     * @param  mixed $nombre
     * @param  mixed $apellido
     * @param  mixed $correo
     * @param  mixed $telefono
     * @param  mixed $direccion
     * @param  mixed $poblacion
     * @param  mixed $codigop
     * @param  mixed $provincia
     * @param  mixed $operario
     * @param  mixed $fecha
     * @param  mixed $descripcion
     * @param  mixed $anotacioni
     * @return void
     */
    public static function añadirTarea($dni,$nombre,$apellido,$correo,$telefono,$direccion,$poblacion,$codigop,$provincia,$operario,$fecha,$descripcion,$anotacioni){
        $base = Conexion::getInstance();
        $fechaactual = strval(date('Y-m-d'));
        $sql = "INSERT INTO tareas (`tarea_id`, `dni`, `nombre`, `apellido`, `telefono`, `correo`, `direccion`, `poblacion`, `codigo_postal`, `provincia`, `estado_tarea`, `fecha_creacion`, `operario_encargado`,`fecha_realizacion`,`descripcion`,`anotacion_inicio`,`anotacion_final`) 
        VALUES(NULL,'$dni','$nombre','$apellido',$telefono,'$correo','$direccion','$poblacion',$codigop,'$provincia','B','$fechaactual','$operario','$fecha','$descripcion','$anotacioni',NULL)";
        $result = $base ->base->prepare($sql);
        $result -> execute();
    }
    
    /**
     * modificarTarea
     *
     * En esta funcion modificamos una tarea especifica con los parametros que nos llegan.
     * 
     * @param  mixed $id
     * @param  mixed $dni
     * @param  mixed $nombre
     * @param  mixed $apellido
     * @param  mixed $telefono
     * @param  mixed $correo
     * @param  mixed $direccion
     * @param  mixed $poblacion
     * @param  mixed $codigop
     * @param  mixed $provincia
     * @param  mixed $estado
     * @param  mixed $operario
     * @param  mixed $fecha_realizacion
     * @param  mixed $descripcion
     * @param  mixed $anotacioni
     * @param  mixed $anotacionf
     * @return void
     */
    public static function modificarTarea($id,$dni,$nombre,$apellido,$telefono,$correo,$direccion,$poblacion,$codigop,$provincia,$estado,$operario,$fecha_realizacion,$descripcion,$anotacioni,$anotacionf){
        $base = Conexion::getInstance();
        $sql="UPDATE tareas SET tarea_id='$id', dni='$dni', nombre='$nombre', apellido='$apellido', telefono=$telefono, correo='$correo', direccion='$direccion', poblacion='$poblacion', codigo_postal=$codigop, provincia='$provincia', estado_tarea='$estado', operario_encargado='$operario', fecha_realizacion='$fecha_realizacion',descripcion='$descripcion', anotacion_inicio='$anotacioni', anotacion_final='$anotacionf' WHERE tarea_id='$id'";
        $result =$base->base->prepare($sql);
        $result -> execute();
    }
        
    /**
     * mostrarTareaID
     *
     * Funcion donde mostramos la tarea que coincide con el id que pasamos por parametro y la devolvemos.
     * @param  mixed $id
     * @return void
     */

    public static function mostrarTareaID($id){
        $base = Conexion::getInstance();
        $sql="SELECT * FROM tareas WHERE tarea_id='$id'";
        $result = $base->base->prepare($sql);
        $result -> execute();
        return $result->fetch(PDO::FETCH_ASSOC);
    }
        
    /**
     * eliminarTarea
     *
     * Funcion para eliminar una tarea de la BBDD que coincida con el id que pasamos por parametro.
     * @param  mixed $id
     * @return void
     */
    public static function eliminarTarea($id){
        $base = Conexion::getInstance();
        $sql="DELETE FROM tareas WHERE tarea_id='$id'";
        $result =$base->base->prepare($sql);
        $result -> execute(); 
    }
        
    /**
     * mostrarProvincias
     *
     * Funcion donde cojemos todas las provincias que estan almacenadas en la BBDD para finalmente devolverlas en forma de array.
     * @return void
     */
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
    
    /**
     * completarTarea
     *
     * Funcion que modifica una tarea con los datos que pasamos por parametro.
     * 
     * @param  mixed $id
     * @param  mixed $estado
     * @param  mixed $anotacioni
     * @param  mixed $anotacionf
     * @return void
     */
    public static function completarTarea($id,$estado,$anotacioni,$anotacionf){
        $base = Conexion::getInstance();
        $sql="UPDATE tareas SET tarea_id='$id', estado_tarea='$estado',  anotacion_inicio='$anotacioni', anotacion_final='$anotacionf' WHERE tarea_id='$id'";
        $result =$base->base->prepare($sql);
        $result -> execute();
    }

}