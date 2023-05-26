<?php

class Product
{

    public $name;

    public $price;

    public function setName($name)
    {
       $this->name = ucfirst($name); 
    }

    public function formatPrice()
    {
        return number_format($this->price, decimals: 2);
    }
}

$fruitsoort1 = new Product();
$fruitsoort1->setName("Banaan");
$fruitsoort1->price = 2;



echo $fruitsoort1->price. "<br>";


var_dump($fruitsoort1);
?>