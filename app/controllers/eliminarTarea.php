<?php
include('../models/conexionPDO.php');

if(!$_POST){
    include('../views/eliminarTareaID.php');
}else{
    include('../views/eliminarTarea.php');
}
?>