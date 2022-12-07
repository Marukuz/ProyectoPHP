<?php
function añadirTarea($dni,$nombre,$apellido,$correo,$telefono,$direccion,$poblacion,$codigop,$provincia,$operario,$fecha,$descripcion){
    $base = conex();
    $fechaactual = strval(date('Y-m-d'));
    $sql = "INSERT INTO tareas (`tarea_id`, `dni`, `nombre`, `apellido`, `telefono`, `correo`, `direccion`, `poblacion`, `codigo_postal`, `provincia`, `estado_tarea`, `fecha_creacion`, `operario_encargado`,`fecha_realizacion`,`anotacion_inicio`,`anotacion_final`) 
    VALUES(NULL,'$dni','$nombre','$apellido','$telefono','$correo','$direccion','$poblacion','$codigop','$provincia','B','$fechaactual','$operario','$fecha','$descripcion',NULL)";
    $result = $base ->prepare($sql);
    $result -> execute();
}

function insertarTareasTabla(){
    $base = conex();
     $sql="SELECT tarea_id, nombre, apellido, telefono, poblacion, provincia, estado_tarea, anotacion_inicio, fecha_realizacion FROM tareas ORDER BY fecha_realizacion";
        $result =$base->prepare($sql);
        $result -> execute();
        while($registro = $result->fetch(PDO::FETCH_ASSOC)){
            $id = $registro['tarea_id'];    
            echo "<tr>
            <td scope='row' name='id'>".$registro['tarea_id']."</td>
            <td scope='row'>".$registro['nombre']."</td>
            <td scope='row'>".$registro['apellido']."</td>
            <td scope='row'>".$registro['telefono']."</td>
            <td scope='row'>".$registro['poblacion']."</td>
            <td scope='row'>".$registro['provincia']."</td>
            <td scope='row'>".$registro['estado_tarea']."</td>
            <td scope='row'>".$registro['anotacion_inicio']."</td>
            <td scope='row'>".$registro['fecha_realizacion']."</td>
            <td scope='row'><button type='submit'>Ver</button></td>
          </tr>";
        }
}

function insertarTareasTablaCompleta($id){
    $base = conex();
    $sql="SELECT tarea_id, dni , nombre, apellido, telefono, correo, direccion, poblacion, codigo_postal, provincia, estado_tarea, fecha_creacion, operario_encargado, fecha_realizacion, anotacion_inicio, anotacion_final FROM tareas WHERE tarea_id='$id'";
        $result =$base->prepare($sql);
        $result -> execute();
        while($registro = $result->fetch(PDO::FETCH_ASSOC)){
            echo "<tr>
            <td scope='row'>".$registro['tarea_id']."</td>
            <td scope='row'>".$registro['dni']."</td>
            <td scope='row'>".$registro['nombre']."</td>
            <td scope='row'>".$registro['apellido']."</td>
            <td scope='row'>".$registro['telefono']."</td>
            <td scope='row'>".$registro['correo']."</td>
            <td scope='row'>".$registro['direccion']."</td>
            <td scope='row'>".$registro['poblacion']."</td>
            <td scope='row'>".$registro['codigo_postal']."</td>
            <td scope='row'>".$registro['provincia']."</td>
            <td scope='row'>".$registro['estado_tarea']."</td>
            <td scope='row'>".$registro['fecha_creacion']."</td>
            <td scope='row'>".$registro['operario_encargado']."</td>
            <td scope='row'>".$registro['fecha_realizacion']."</td>
            <td scope='row'>".$registro['anotacion_inicio']."</td>
            <td scope='row'>".$registro['anotacion_final']."</td>
          </tr>";
        }
}
function mostrarProvincias(){
    $base = conex();
    $sql="SELECT nombre FROM tbl_provincias";
       $result =$base->prepare($sql);
       $result -> execute();
       while($registro = $result->fetch(PDO::FETCH_ASSOC)){
            echo "<option>".$registro['nombre']."</option>";
       }
}
function selectTareaID($id){
    $base = conex();
    $sql="SELECT tarea_id, dni , nombre, apellido, telefono, correo, direccion, poblacion, codigo_postal, provincia, estado_tarea, fecha_creacion, operario_encargado, fecha_realizacion, anotacion_inicio, anotacion_final FROM tareas WHERE tarea_id='$id'";
        $result =$base->prepare($sql);
        $result -> execute();
        return $result->fetch(PDO::FETCH_ASSOC);
}

function updateModificarTarea($id,$dni,$nombre,$apellido,$telefono,$correo,$direccion,$poblacion,$codigop,$provincia,$estado,$fecha_creacion,$operario,$fecha_realizacion,$anotacioni,$anotacionf){
    $base = conex();
    $sql="UPDATE tareas SET tarea_id = '$id', dni='$dni', nombre='$nombre', apellido='$apellido', telefono='$telefono', correo='$correo', direccion='$direccion', poblacion='$poblacion', codigo_postal='$codigop', provincia='$provincia', estado_tarea='$estado', fecha_creacion='$fecha_creacion', operario_encargado='$operario', fecha_realizacion='$fecha_realizacion', anotacion_inicio='$anotacioni', anotacion_final='$anotacionf' WHERE tarea_id='$id'";
        $result =$base->prepare($sql);
        $result -> execute();
}
function eliminarTarea($id){
    $base = conex();
    $sql="DELETE FROM tareas WHERE tarea_id='$id'";
        $result =$base->prepare($sql);
        $result -> execute();
}

