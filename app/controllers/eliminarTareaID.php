<?php
include('../models/conexionPDO.php');

if(!$_POST){
    include('../views/eliminarTarea.php');
}else{
    eliminarTarea($_POST['id']);
    include('../views/eliminarTarea.php');
    echo "<script>alert('Los datos se han borrado correctamente.');</script>";

}
?>