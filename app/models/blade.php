<?php

use Jenssegers\Blade\Blade;

// Definimos las rutas VIEW y CACHE.
define('VIEW_PATH', __DIR__.'/../views');
define('CACHE_PATH', VIEW_PATH.'/cache');
// Incluimos el autoload
include (__DIR__.'/../../vendor/autoload.php');

// Instanciamos blade.
$blade = new Blade(VIEW_PATH, CACHE_PATH);

