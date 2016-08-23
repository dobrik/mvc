<?php

class Bootstrap
{
    public function __initAutoLoad()
    {
        spl_autoload_register(
            function ($models) {
                if (file_exists('app/models/' . $models . '.php')) {
                    include_once 'app/models/' . $models . '.php';
                }
            }
        );
        spl_autoload_register(function ($class) {
            if (file_exists('vendors/engine/' . $class . '.php')) {
                include_once 'vendors/engine/' . $class . '.php';
            }
        });
    }
}