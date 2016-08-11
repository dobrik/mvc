<?php

class Route
{
    public static function start(){
        $Controller = 'Index';
        $Action = 'index';
        $routes = explode('/', $_SERVER['REQUEST_URI']);
        if(!empty($routes[1])){
            $Controller = $routes[1];
        }
        if(!empty($routes[2])){
            $Action = $routes[2];
        }
        return [$Controller, $Action];
    }
}