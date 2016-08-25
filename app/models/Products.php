<?php

class Products
{
    public function getPopularProducts()
    {
        $link = Db::getInstance();
        $link->query("SELECT * FROM `products` ORDER BY visits DESC LIMIT 0, 10");

        return $link->fetch_all();
    }
    public function getCategories()
    {
        $link = Db::getInstance();
        $link->query("SELECT * FROM `categories`");
        return $link->fetch_all();
    }
    public function getCategoryProducts($category){
        $link = Db::getInstance();
        $link->query("SELECT * FROM `products` JOIN `categories` ON `categories`.`id`=`products`.`category_id` WHERE `categories`.`url`='{$category}'");
        return $link->fetch_all();
    }
}