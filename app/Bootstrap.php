<?php

class Bootstrap
{
    public function __initAutoLoad()
    {

        spl_autoload_register(function ($class) {
            if (file_exists('vendors/engine/' . $class . '.php')) {
                include_once 'vendors/engine/' . $class . '.php';
            }
        });
    }
}