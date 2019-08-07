<?php

class Product {
    private $name;
    private $price;

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
}

$product = new Product();

$product->setName("supreme");
$productName = $product->getName();

var_dump($productName);