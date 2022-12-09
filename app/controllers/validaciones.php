<?php

class Validaciones
{

    public static function validarCodigop($codigop)
    {
        $pattern = '/^([0-9]{5})$/';

        if ((preg_match($pattern, $codigop))) {

            return true;
        } else {

            return false;
        }
    }
    public static function validarCorreo($correo)
    {
        $pattern = '/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/';

        if ((preg_match($pattern, $correo))) {

            return true;
        } else {

            return false;
        }
    }


    public static function ValidarDNI($dni)
    {
        $letter = substr($dni, -1);
        $numbers = substr($dni, 0, -1);

        if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numbers % 23, 1) == $letter && strlen($letter) == 1 && strlen($numbers) == 8) {
            return true;
        }
        return false;
    }
    public static function validarNombreYApellido($c)
    {
        $pattern = "/^[a-z]+$/i";

        if ((preg_match($pattern, $c))) {

            return true;
        } else {

            return false;
        }
    }
    public static function validarTelefono($numero)
    {

        $pattern = '/^([0-9]{9})$/';
        $pattern_2 = '/^([0-9]{3})(-)([0-9]{3})(-)([0-9]{3})$/';

        if ((preg_match($pattern, $numero)) || (preg_match($pattern_2, $numero))) {

            return true;
        } else {

            return false;
        }
    }
    public static function filtradoCadena($error,$dni,$nombre,$apellido,$correo,$telefono,$direccion,$poblacion,$codigop,$provincia,$operario,$fecha,$descripcion,$anotacioni){
    
        if(empty($dni)){
            $error->AnotaError('dni','No has introducido un dni');
        }elseif(!self::ValidarDNI($dni)){
            $error->AnotaError('dni','Formato no valido');
        }   
        if(empty($nombre)){
            $error->AnotaError('nombre','No has introducido un nombre');
        }elseif(!self::validarNombreYApellido($nombre)){
            $error->AnotaError('nombre','Formato no valido, no introduzca numeros.');
        }  
        if(empty($apellido)){
            $error->AnotaError('apellido','No has introducido un apellido');
        }elseif(!self::validarNombreYApellido($apellido)){
            $error->AnotaError('apellido','Formato no valido, no introduzca numeros.');
        }  
        if(empty($correo)){
            $error->AnotaError('correo','No has introducido un correo');
        }elseif(!self::validarCorreo($correo)){
            $error->AnotaError('correo','Formato no valido');
        }
        if(empty($telefono)){
            $error->AnotaError('telefono','No has introducido un telefono');
        }elseif(!self::validarTelefono($telefono)){
            $error->AnotaError('telefono','Formato no valido');
        }   
        if(empty($direccion)){
            $error->AnotaError('direccion','No has introducido una direccion');
        }
        if(empty($poblacion)){
            $error->AnotaError('poblacion','No has introducido una poblacion');
        }
        if(empty($codigop)){
            $error->AnotaError('codigop','No has introducido un codigo postal');
        }elseif(!self::validarCodigop($codigop)){
            $error->AnotaError('codigop','Formato no valido');
        }
        if(empty($provincia)){
            $error->AnotaError('provincia','No has seleccionado una provincia');
        }
        if(empty($operario)){
            $error->AnotaError('operario','No has seleccionado un operario');
        }
        if(empty($fecha)){
            $error->AnotaError('fecha','No has seleccionado una fecha');
        }
        if(empty($descripcion)){
            $error->AnotaError('descripcion','No has introducido una descripcion');
        }
        if(empty($anotacioni)){
            $error->AnotaError('anotacioni','No has introducido una anotacion inicial');
    
        }
        return $error;
    }
    
}
