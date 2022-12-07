<?php
include('../models/conexionPDO.php');

if(!$_POST){
    include('../views/modificartareaID.php');
}else{
    include('../views/modificarTarea.php');
}
?>