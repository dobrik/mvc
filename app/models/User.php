<?php

class User
{
    protected static $role;

    public function __construct()
    {
        $this->is_logged();
    }

    protected static function is_logged()
    {
        if (!$_SESSION['username'] || !$_SESSION['password'] || !$_COOKIE['logged']) {
            return false;
        }
        $link = Db::getInstance();
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];
        $link->query("SELECT role FROM `users` AS u JOIN `roles` AS r ON `u`.`roleid`=`r`.`id` WHERE username='{$username}' and password='{$password}'");
        if ($link->num_rows() > 0) {
            return $link->fetch_all()[0]['role'];
        } else {
            return false;
        }
    }

    public function logIn($username, $password, $remember)
    {
        $time = ($remember) ? 86400 * 7 : 86400;
        $password = md5($password);
        $link = Db::getInstance();
        $link->query("SELECT role FROM `users` AS u JOIN `roles` AS r ON `u`.`roleid`=`r`.`id` WHERE username='{$username}' and password='{$password}'");
        if ($link->num_rows() > 0) {
            $_SESSION['password'] = $password;
            $_SESSION['username'] = $username;
            setcookie('logged', true, time() + $time, '/');
            if ($link->fetch_all()[0]['role'] != 'User') {
                header('Location: /admin/');
            } else {
                header('Location: /');
            }
        } else {
            session_destroy();
        }
    }

    public function logout()
    {
        $role = self::is_logged();
        setcookie('logged', false, time() - 86400, '/');
        unset($_SESSION['password']);
        unset($_SESSION['username']);
        session_destroy();
        if ($role == 'Admin') {
            header('Location: /admin/');
        } else {
            header('Location: /');
        }
        exit;
    }

}