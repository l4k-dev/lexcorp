<?php

namespace App\Core;

class Router
{
    private array $routes = [];

    public function get(string $uri, array $action): void
    {
        $this->routes['GET'][$uri] = $action;
    }

    public function dispatch(string $method, string $uri): void
    {
        if (! isset($this->routes[$method][$uri])) {
            http_response_code(404);
            exit('404 - Página não encontrada');
        }

        [$controller, $function] = $this->routes[$method][$uri];

        $instance = new $controller();

        $instance->$function();
    }
}