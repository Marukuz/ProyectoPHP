<?php

use Jenssegers\Blade\Blade;

define('VIEW_PATH', __DIR__.'/../views');
define('CACHE_PATH', VIEW_PATH.'/cache');
include (__DIR__.'/../../vendor/autoload.php');

$blade = new Blade(VIEW_PATH, CACHE_PATH);

