<?php

namespace App\Core;

class View
{
    public static function render(
        string $view,
        array $data = [],
        string $layout = 'layouts.app'
    ): void {

        extract($data);

        $viewPath = BASE_PATH . '/resources/views/' .
            str_replace('.', '/', $view) . '.php';

        $layoutPath = BASE_PATH . '/resources/views/' .
            str_replace('.', '/', $layout) . '.php';


        if (!file_exists($viewPath)) {
            throw new \Exception(
                "View não encontrada: {$viewPath}"
            );
        }


        if (!file_exists($layoutPath)) {
            throw new \Exception(
                "Layout não encontrado: {$layoutPath}"
            );
        }


        ob_start();

        require $viewPath;

        $content = ob_get_clean();


        require $layoutPath;
    }
}