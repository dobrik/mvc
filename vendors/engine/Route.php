<?php

class Route
{
    public static function start()
    {
        $Controller = 'Index';
        $Action = 'index';
        $routes = explode('/', $_SERVER['REQUEST_URI']);
        if (!empty($routes[1])) {
            $Controller = $routes[1];
        }
        if (!empty($routes[2])) {
            $Action = $routes[2];
        }
        spl_autoload_register(
            function ($models) {
                if (file_exists('app/models/' . $models . '.php')) {
                    include_once 'app/models/' . $models . '.php';
                }
            }
        );
        $Controller = ucfirst(strtolower($Controller)) . 'Controller';
        $Action = strtolower($Action) . 'Action';
        $controllerPath = 'app/controllers/' . $Controller . '.php';
        if (file_exists($controllerPath)) {
            include_once $controllerPath;
            $controller = new $Controller;
        } else {
            self::error404();
        }
        if (method_exists($controller, $Action)) {
            $controller->$Action();
        } else {
            self::error404();
        }
    }

    public static function error404()
    {
        $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
        header('HTTP/1.1 404 Not Found');
        header('Status: 404 Not Found');
        header('Location: ' . $host . 'error404');
    }
}