<?php

class Product
{
    public function __construct(public $price, public $name, public $currency = "&euro")
    {
        $this->name = ucfirst($name);
    }

    public function formatPrice()
    {
        return number_format($this->price, decimals: 1);
    }
}

$muziek1 = new Product( price: 40, name: "Andre Hazes", currency: "$");

var_dump($muziek1);

?>