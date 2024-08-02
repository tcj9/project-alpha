<?php

namespace App\controllers;

use Symfony\Component\HttpFoundation\Response;

class BaseController
{
    protected function render($view, $data = [])
    {
        extract($data);
        ob_start();
        require __DIR__ . '/../views/' . $view . '.php';
        $content = ob_get_clean();
        return new Response($content);
    }
}
