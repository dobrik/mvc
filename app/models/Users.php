<?php

class Users
{
    public $logged = false;
    protected $role;

    public function __construct()
    {
        $this->is_logged();
    }

    protected function is_logged()
    {
        if (!$_SESSION['username'] || !$_SESSION['password'] || !$_COOKIE['logged']) {
            return false;
        }
        $link = Db::getInstance();
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];
        $link->query("SELECT role FROM `users` AS u JOIN `roles` AS r ON `u`.`roleid`=`r`.`id` WHERE username='{$username}' and password='{$password}'");
        if ($link->num_rows() > 0) {
            $this->logged = true;
            $this->role = $link->fetch_all()[0]['role'];
        }
    }

    public function logIn($username, $password)
    {
        $password = md5($password);
        $link = Db::getInstance();
        $link->query("SELECT id FROM `users` WHERE username='{$username}' and password='{$password}'");
        if ($link->num_rows() > 0) {
            $_SESSION['password'] = $password;
            $_SESSION['username'] = $username;
            setcookie('logged', true, time()+86400);
        }else{
            session_destroy();
        }
    }

}