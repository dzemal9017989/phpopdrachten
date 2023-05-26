<?php

class Product
{

    public $name;

    public $price;

    public $currency;


    public function __construct($price, $name = "Fruit", $currency)
    {
        $this->name = ucfirst($name);
        $this->price = $price;
        $this->currency=$currency;
    }

    public function formatPrice()
    {
        return number_format($this->price, decimals: 2);
    }
}

$fruitsoort1 = new Product(price: 40, name:"aardbei", currency: "$");

// $fruitsoort1->price = 40;

// $fruitsoort2 = new Product(price: "bla", name: 50);
// $fruitsoort2->name. "<br>";
// $fruitsoort2->price;

// $fruitsoort2->price = 6;

// echo $fruitsoort1->formatPrice(). "<br>";
// echo $fruitsoort1->name. "<br>";
// echo $fruitsoort1->price;



echo $fruitsoort1->name. "<br>";
echo $fruitsoort1->price;
echo $fruitsoort1->currency;

// var_dump($fruitsoort1);
// var_dump($fruitsoort2);

// echo $fruitsoort2->formatPrice(). "<br>";
// echo $fruitsoort2->name. "<br>";
// echo $fruitsoort2->price;




?>