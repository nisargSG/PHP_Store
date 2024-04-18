<?php

require_once 'utils/db.php';

class Product
{
    public $id;
    public $name;
    public $image;
    public $description;
    public $price;
    public $active;
    public $trending;


    public function __construct($id, $name, $image, $description, $price, $active, $trending)
    {
        $this->id = $id;
        $this->name = $name;
        $this->image = $image;
        $this->description = $description;
        $this->price = $price;
        $this->active = $active;
        $this->trending = $trending;
    }

    // Getter methods
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getImage() {
        return $this->image;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPrice() {
        return $this->price;
    }

    public function isActive() {
        return $this->active;
    }

    public function isTrending() {
        return $this->trending;
    }


    public static function getAllProducts()
    {
        $products = array();

        $productsResult = executeQuery("SELECT * FROM products WHERE active=TRUE");
        if ($productsResult) {
            while ($row = $productsResult->fetch_assoc()) {
                $product = new Product($row['id'], $row['name'], $row['image'], $row['description'], $row['price'], $row['active'], $row['trending']);
                $products[] = $product;
            }
            $productsResult->free();
        }

        return $products;
    }


    public static function getTrendingProducts($limit = 5)
    {
        $products = array();

        $productsResult = executeQuery("SELECT * FROM products WHERE trending=TRUE AND active=TRUE LIMIT $limit");

        if ($productsResult) {
            while ($row = $productsResult->fetch_assoc()) {
                $product = new Product($row['id'], $row['name'], $row['image'], $row['description'], $row['price'], $row['active'], $row['trending']);
                $products[] = $product;
            }
            $productsResult->free();
        }

        return $products;
    }
}
