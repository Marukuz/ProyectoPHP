<?php
function validarTelefono($numero){

$pattern = '/^([0-9]{9})$/';
$pattern_2 = '/^([0-9]{3})(-)([0-9]{3})(-)([0-9]{3})$/';

if((preg_match($pattern, $numero)) || (preg_match($pattern_2, $numero))){

    return true;
} else{

    return false;
}
}