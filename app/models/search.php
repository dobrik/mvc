<?php

class Search
{
    public function searchProducts($search)
    {
        if(!empty($search)){
            $link = Db::getInstance();
            $link->query("SELECT * FROM `products` WHERE `product` LIKE '%{$search}%' LIMIT 0, 25");
            return $link->fetch_all();
        }
    }
}