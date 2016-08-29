<?php

class Search
{
    public function searchProducts($search)
    {
        if (!empty($search)) {
            $link = Db::getInstance();
            $link->query("SELECT * FROM `products` WHERE `product` LIKE '%{$search}%' LIMIT 0, 25");
            $result = [];
            foreach ($link->fetch_all() as $key => $item) {
                $result = array_merge($result, [$item]);
                if ($item['count'] > 0) {
                    $result[$key] += ['stock' => 'yes'];
                } else {
                    $result[$key] += ['stock' => 'no'];
                }
            }
            return $result;
        }
    }

    public function searchProductsAjax($search)
    {
        if (!empty($search)) {
            $link = Db::getInstance();
            $link->query("SELECT * FROM `products` WHERE `product` LIKE '%{$search}%' LIMIT 0, 5");
            $result = [];
            foreach ($link->fetch_all() as $key => $item) {
                $result = array_merge($result, [$item]);
                if ($item['count'] > 0) {
                    $result[$key] += ['stock' => 'yes'];
                } else {
                    $result[$key] += ['stock' => 'no'];
                }
            }
            return json_encode($result);
        }
    }
}