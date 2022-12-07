<?php
include('../models/conexionPDO.php');

if(!$_POST){
    include('../views/modificartarea.php');
}else{
    updateModificarTarea($_POST['id'],$_POST['dni'],$_POST['nombre'],$_POST['apellido'],$_POST['telefono'],$_POST['correo'],$_POST['direccion'],$_POST['poblacion'],$_POST['codigop'],$_POST['provincia'],$_POST['estado'],$_POST['fechac'],$_POST['operario'],$_POST['fecha'],$_POST['descripcion_inicial'],$_POST['descripcion_final']);
    include('../views/modificartarea.php');
    echo "<script>alert('Los datos se han modificado correctamente.');</script>";

}
?>