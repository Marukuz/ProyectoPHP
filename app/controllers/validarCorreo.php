<?php
function validarCorreo($correo){
    $pattern='/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/';

    if((preg_match($pattern, $correo))){

        return true;
    } else{

        return false;
    }
}