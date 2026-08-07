<?php

namespace App\Core;

class App
{
    public function __construct(
        private Router $router
    ) {}

    public function run(): void
    {
        $this->router->dispatch(
            $_SERVER['REQUEST_METHOD'],
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
        );
    }
}