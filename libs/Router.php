<?php

namespace Core;

use RuntimeException;

class Router
{
    public function resolve()
    {
        $route = $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD'];

        $callback = ROUTES[$method][$route] ?? false;

        if ($callback === false){
            throw new RuntimeException();
        }

        [$className, $action] = $callback;
        $controller = new $className();

        return $controller->$action();
    }
}