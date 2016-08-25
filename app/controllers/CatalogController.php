<?php

class CatalogController extends Controller
{
    public function indexAction()
    {
        $products = new Products();
        $main = new Main();
        $this->view->render('catalog', ['menu' => $main->getMenu(),
            'categories' => $products->getCategories(),
            'currpage' => $main->getCurrentController(),
            'slider' => $main->getSlider()]);
    }
}