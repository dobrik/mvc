<?php

class Route
{
    public static function start()
    {
        $Controller = 'Index';
        $Action = 'index';
        $Params = [];
        $routes = explode('/', $_SERVER['REQUEST_URI']);
        if (!empty($routes[1]) && stripos($routes[1], '?') === false) {
            $Controller = $routes[1];
        }
        if (!empty($routes[2]) && stripos($routes[2], '?') === false) {
            $Action = $routes[2];
        }
        for($i = 3; $i < count($routes); $i++) {
            if (!empty($routes[$i]) && stripos($routes[$i], '?') === false) {
                $Params[] = $routes[$i];
            }
        }
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
            $controller->$Action($Params);
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