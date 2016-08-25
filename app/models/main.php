<?php

class Main
{
    public function getMenu()
    {
        $link = Db::getInstance();
        $link->query("SELECT * FROM `pages`");
        return $link->fetch_all();
    }

    public function getSlider(){
        $link = Db::getInstance();
        $link->query("SELECT * FROM `slider`");
        return $link->fetch_all();
    }

    public function getCurrentController()
    {
        $url = explode('/', $_SERVER['REQUEST_URI']);
        if (!empty($url[1])) {
            $page = $url[1];
        } else {
            $page = 'index';
        }
        return $page;
    }
}