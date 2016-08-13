<?php

class Bootstrap
{
    public function __initAutoLoad()
    {
        spl_autoload_register(function ($class) {
            include_once 'vendors/engine/'.$class.'.php';
        });
    }
}