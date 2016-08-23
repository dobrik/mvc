<?php

class AdminController extends Controller
{
    public function indexAction()
    {
        $admin = new Admin();
        if($admin->is_admin()){
            $this->view->render('admin/dashboard');
        }
        $admin->logIn('admin', '32167');

    }
    public function dashboardAction(){
        $this->view->render('admin/dashboard');
    }
    public function loginAction(){
        $this->view->render('admin/login');
    }

}