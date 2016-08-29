<?php

class Products
{
    public function getPopularProducts()
    {
        $link = Db::getInstance();
        $link->query("SELECT * FROM `products` ORDER BY visits DESC LIMIT 0, 10");
        $result = $link->fetch_all();
        for($i = 0; $i < count($result);$i++){
            $result[$i]['link'] = '/catalog/product/'.$result[$i]['link'];
        }

        return $result;
    }

    public function getCategories()
    {
        $link = Db::getInstance();
        $link->query("SELECT * FROM `categories`");
        return $link->fetch_all();
    }

    public function getCategoryProducts($category)
    {
        $link = Db::getInstance();
        $link->query("SELECT * FROM `products` JOIN `categories` ON `categories`.`id`=`products`.`category_id` WHERE `categories`.`url`='{$category}'");
        $result = $link->fetch_all();
        for($i = 0; $i < count($result);$i++){
            $result[$i]['link'] = '/catalog/product/'.$result[$i]['link'];
        }
        return $result;
    }

    public function getProduct($product)
    {
        $link = Db::getInstance();
        $link->query("SELECT * FROM `products` WHERE link='{$product[0]}'");
        return $link->fetch_all()[0];
    }

    public function addProduct($productData)
    {
        $main = new Main();
        $extention = explode('.', $_FILES['image']['name']);
        $extention = $extention[count($extention) - 1];
        $imgName = $productData['link'] . md5(time() . rand(1, 99)) . '.' . $extention;
        $path = $main->getConfigDirectories()['productimages'] . $imgName;
        $link = Db::getInstance();
        $link->query("INSERT INTO `products` (`product`, `link`, `description`, `content`, `price`, `preview`, `count`, `category_id`) VALUES
        ('{$productData['product']}', '{$productData['link']}', '{$productData['description']}', '{$productData['content']}', '{$productData['price']}', '{$path}', '{$productData['count']}', '{$productData['category']}')");
        move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . $path);
        return true;
    }
    public function getProductsJson(){
        $link = Db::getInstance();
        $link->query("SELECT `product`, `link`, `description`, `price`, `count`, `category` FROM `products` AS p JOIN `categories` AS c ON `c`.`id`=`p`.`category_id`");
        $data = [];
        $result = $link->fetch_all();
        for($i = 0; $i<count($result); $i++){
            foreach ($result[$i] as $item){
                $data[$i][] = $item;
            }

        }
        return json_encode($data);
    }
}