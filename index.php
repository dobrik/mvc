<?php
session_start();
//header('Content-Type: text/html; charset=utf-8');
include_once 'app/Bootstrap.php';

$bootstrap = new Bootstrap();
$bootstrap->__initAutoLoad();

Route::start();