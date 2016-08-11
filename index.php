<?php

include_once 'app/Bootstrap.php';

$bootstrap = new Bootstrap();
$bootstrap->__initAutoLoad();

var_dump(Route::start());