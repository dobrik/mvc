<?php

class SearchController extends Controller
{
    public function indexAction()
    {
        if(!empty($_GET['search'])){
            $search = new Search();
            $result = $search->searchProducts($_GET['search']);
        }
        $main = new Main();
        $products = new Products();
        $this->view->render('search', ['menu' => $main->getMenu(), 'categories' => $products->getCategories(), 'result' => $result]);
    }
}