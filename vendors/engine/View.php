<?php

class View
{
    public $template = 'layout';

    public function render($view, $data = [])
    {
        $viewPath = 'app/views/';
        if (is_null($this->template)) {
            if (file_exists($viewPath . $view . '.php')) {
                include_once $viewPath . $view . '.php';
            } else {
                echo 'Файл представления не найден!';
            }
        } else {
            if (file_exists($viewPath . $this->template . '.php')) {
                include_once $viewPath . $this->template . '.php';
            } else {
                echo 'Файл шаблона не найден!';
            }
        }
    }
}