<?php

class IndexController extends Controller
{
    public function indexAction()
    {
        $products = new Products();
        $this->view->render('index', ['products' => $products->getProducts()]);
    }
}