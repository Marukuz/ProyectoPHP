<?php

/**
 * Validaciones
 * 
 * Clase de validaciones 
 */
class Validaciones{
        
    /**
     * validarVacio
     *
     * Validamos el parametro recibido y comprobamos si esta vacio o no.
     * @param  mixed $valor
     * @return void
     */
    public static function validarVacio($valor){
        if(empty($valor)){
            return true;
        }else{
            return false;
        }
    }
        
    /**
     * validarCodigop
     *
     * Validamos mediante expresion regulares que el codigo postal sea correcto
     * @param  mixed $codigop
     * @return void
     */
    public static function validarCodigop($codigop)
    {
        $pattern = '/^([0-9]{5})$/';

        if ((preg_match($pattern, $codigop))) {

            return true;
        } else {

            return false;
        }
    }
        
    /**
     * validarCorreo
     *
     * Validamos mediante expresiones regulares que el correo sea correcto.
     * @param  mixed $correo
     * @return void
     */
    public static function validarCorreo($correo)
    {
        $pattern = '/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/';

        if ((preg_match($pattern, $correo))) {

            return true;
        } else {

            return false;
        }
    }

    
    /**
     * ValidarDNI
     *
     * Validamos mediante expresiones regulares que el dni sea correcto.
     * @param  mixed $dni
     * @return void
     */
    public static function ValidarDNI($dni)
    {
        $letter = substr($dni, -1);
        $numbers = substr($dni, 0, -1);

        if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numbers % 23, 1) == $letter && strlen($letter) == 1 && strlen($numbers) == 8) {
            return true;
        }
        return false;
    }
        
    /**
     * validarNombreYApellido
     *
     * Validamos mediante expresiones regulares que el nombre y apellido sea correcto.
     * @param  mixed $c
     * @return void
     */
    public static function validarNombreYApellido($c)
    {
        $pattern = "/^[a-z]+$/i";

        if ((preg_match($pattern, $c))) {

            return true;
        } else {

            return false;
        }
    }    
    /**
     * validarTelefono
     *
     * Validamos mediante expresiones regulares que el telefono sea correcto de diferentes formas.
     * @param  mixed $numero
     * @return void
     */
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
        
    /**
     * filtradoTareas
     *
     * 
     * Funcion que nos filtra todos los parametros de una tarea que recibe y si es asi añadimos el error al parametro error
     * Para ser mostrado cuando sea necesario.
     * 
     * @param  mixed $error
     * @param  mixed $dni
     * @param  mixed $nombre
     * @param  mixed $apellido
     * @param  mixed $correo
     * @param  mixed $telefono
     * @param  mixed $direccion
     * @param  mixed $poblacion
     * @param  mixed $codigop
     * @param  mixed $provincia
     * @param  mixed $operario
     * @param  mixed $fecha
     * @param  mixed $descripcion
     * @param  mixed $anotacioni
     */
    public static function filtradoTareas($error,$dni,$nombre,$apellido,$correo,$telefono,$direccion,$poblacion,$codigop,$provincia,$operario,$fecha,$descripcion,$anotacioni){
    
        if(self::validarVacio($dni)){
            $error->AnotaError('dni','No has introducido un dni');
        }elseif(!self::ValidarDNI($dni)){
            $error->AnotaError('dni','Formato no valido');
        }   
        if(self::validarVacio($nombre)){
            $error->AnotaError('nombre','No has introducido un nombre');
        }elseif(!self::validarNombreYApellido($nombre)){
            $error->AnotaError('nombre','Formato no valido, no introduzca numeros.');
        }  
        if(self::validarVacio($apellido)){
            $error->AnotaError('apellido','No has introducido un apellido');
        }elseif(!self::validarNombreYApellido($apellido)){
            $error->AnotaError('apellido','Formato no valido, no introduzca numeros.');
        }  
        if(self::validarVacio($correo)){
            $error->AnotaError('correo','No has introducido un correo');
        }elseif(!self::validarCorreo($correo)){
            $error->AnotaError('correo','Formato no valido');
        }
        if(self::validarVacio($telefono)){
            $error->AnotaError('telefono','No has introducido un telefono');
        }elseif(!self::validarTelefono($telefono)){
            $error->AnotaError('telefono','Formato no valido');
        }   
        if(self::validarVacio($direccion)){
            $error->AnotaError('direccion','No has introducido una direccion');
        }
        if(self::validarVacio($poblacion)){
            $error->AnotaError('poblacion','No has introducido una poblacion');
        }
        if(self::validarVacio($codigop)){
            $error->AnotaError('codigop','No has introducido un codigo postal');
        }elseif(!self::validarCodigop($codigop)){
            $error->AnotaError('codigop','Formato no valido');
        }
        if(self::validarVacio($provincia)){
            $error->AnotaError('provincia','No has seleccionado una provincia');
        }
        if(self::validarVacio($operario)){
            $error->AnotaError('operario','No has seleccionado un operario');
        }
        if(self::validarVacio($fecha)){
            $error->AnotaError('fecha','No has seleccionado una fecha');
        }
        if(self::validarVacio($descripcion)){
            $error->AnotaError('descripcion','No has introducido una descripcion');
        }
        if(self::validarVacio($anotacioni)){
            $error->AnotaError('anotacioni','No has introducido una anotacion inicial');
    
        }
        return $error;
    }
        
    /**
     * filtradoUsuarios
     *
     * Funcion que nos filtra todos los parametros de un usuario que recibe y si es asi añadimos el error al parametro error
     * Para ser mostrado cuando sea necesario.
     * @param  mixed $error
     * @param  mixed $nombre
     * @param  mixed $contrase
     * @param  mixed $rol
     */
    public static function filtradoUsuarios($error,$nombre,$contraseña,$rol){
    
        if(self::validarVacio($nombre)){
            $error->AnotaError('nombre','No has introducido un nombre');
        }
        if(self::validarVacio($contraseña)){
            $error->AnotaError('contraseña','No has introducido una contraseña');
        }
        if(self::validarVacio($rol)){
            $error->AnotaError('rol','No has introducido ningun rol');
        }
        return $error;
    }
    
}
