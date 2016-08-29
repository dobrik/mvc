<?php

class AdminController extends Controller
{
    public function indexAction()
    {
        Admin::is_admin();
        header('Location: /admin/dashboard/');
        exit;
    }

    public function dashboardAction()
    {
        Admin::is_admin();
        $main = new Main();
        $this->view->render('admin/dashboard', ['user' => $main->getUserProfile()]);
    }

    public function loginAction()
    {
        if (!empty($_POST['username']) && !empty($_POST['password'])) {
            $admin = new Admin();
            $admin->logIn($_POST['username'], $_POST['password'], $_POST['remember']);
        }

        $this->view->render('admin/login');
    }

    public function addproductAction()
    {
        Admin::is_admin();
        $main = new Main();
        $products = new Products();
        if (!empty($_POST['product'])) {
            $result['success'] = ($products->addProduct($_POST)) ? 'yes' : 'no';
            $result['product'] = $_POST['product'];
        }
        $this->view->render('admin/addproduct', ['categories' => $products->getCategories(), 'result' => $result, 'user' => $main->getUserProfile()]);
    }

    public function logoutAction()
    {
        $user = new User();
        $user->logout();
    }

    public function showproductsAction()
    {
        $main = new Main();
        $this->view->render('admin/showproducts', ['user' => $main->getUserProfile()]);
    }

    public function ajaxAction($param)
    {
        $products = new Products();
        $this->view->render('/admin/ajax/' . $param[0], ['products' => $products->getProductsJson()]);
    }
}