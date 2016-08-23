<?php

class View
{
    public function render($view, $data = [])
    {
        if (!empty($data)) {
            extract($data);
        }
        $viewPath = 'app/views/';
        if (is_null($view)) {
            if (file_exists($viewPath . 'index.php')) {
                include_once $viewPath . 'index.php';
            } else {
                echo 'Файл шаблона не найден!';
            }
        } else {
            if (file_exists($viewPath . $view . '.php')) {
                include_once $viewPath . $view . '.php';
            } else {
                echo 'Файл шаблона не найден!';
            }
        }
    }
}