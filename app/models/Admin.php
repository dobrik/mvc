<?php

class Admin extends Users
{
    public function is_admin()
    {
        if ($this->role == 'Admin') {
            header('Location: /admin/dashboard/');
        } else if ($this->logged) {
            header('Location: /index/');
        }else{
            header('Location: /admin/login/');
        }
    }
}