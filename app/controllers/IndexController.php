<?php

class IndexController extends Controller
{
    public function indexAction()
    {
        $products = new Products();
        $main = new Main();
        $this->view->render('index', ['menu' => $main->getMenu(),
            'popularProducts' => $products->getPopularProducts(),
            'categories' => $products->getCategories(),
            'currpage' => $main->getCurrentController(),
            'slider' => $main->getSlider()]);
    }
}