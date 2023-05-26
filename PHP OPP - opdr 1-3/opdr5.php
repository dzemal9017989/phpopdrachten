<?php

class Product
{

    public $name;

    public $price;

    public function __construct($name)
    {
        $this->name = ucfirst($name);
    }

    public function formatPrice()
    {
        return number_format($this->price, decimals: 2);
    }
}

$fruitsoort1 = new Product(name: "Banaan");

$fruitsoort1->price = 3;

$fruitsoort2 = new Product(name: "Aardbei");

$fruitsoort2->price = 6;

echo $fruitsoort1->formatPrice(). "<br>";
echo $fruitsoort1->name. "<br>";
echo $fruitsoort1->price;

var_dump($fruitsoort1);

echo $fruitsoort2->formatPrice(). "<br>";
echo $fruitsoort2->name. "<br>";
echo $fruitsoort2->price;

var_dump($fruitsoort2);


?>