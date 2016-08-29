<?php

class Admin extends User
{
    public static function is_admin()
    {
        if (User::is_logged() != 'Admin') {
            header('Location: /admin/login/');
            exit;
        } else if(User::is_logged() == 'User'){
            header('Location: /index/');
            exit;
        }
    }

}