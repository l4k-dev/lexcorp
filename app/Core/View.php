<?php

namespace App\Core;

class View
{
    public static function render(string $view, array $data = []): void
    {
        extract($data);

        $viewPath = BASE_PATH . '/resources/views/' .
            str_replace('.', '/', $view) . '.php';

        if (!file_exists($viewPath)) {
            throw new \Exception("View não encontrada: {$viewPath}");
        }

        require $viewPath;
    }
}