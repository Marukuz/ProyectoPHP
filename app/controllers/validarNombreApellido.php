<?php
function validarNombreApellido($c){
    $pattern = "/^[a-z]+$/i";

    if((preg_match($pattern, $c))){

        return true;
    } else{

        return false;
    }
}