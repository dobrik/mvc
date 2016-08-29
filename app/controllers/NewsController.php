<?php

class NewsController extends Controller
{
    public function indexAction()
    {
        $main = new Main();
        //var_dump($_SERVER);
        $this->view->render('news/index', ['menu' => $main->getMenu()]);
    }
}