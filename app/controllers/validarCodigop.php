<?php
function validarCodigop($codigop){
    $pattern='/^([0-9]{5})$/';

    if((preg_match($pattern, $codigop))){

        return true;
    } else{

        return false;
    }
}