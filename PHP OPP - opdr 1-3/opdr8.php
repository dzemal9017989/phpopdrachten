<?php

class Product
{
    public $name;
    public $price;
    public $currency;

    public function __construct($price, $name = "een liedje", $currency = "&euro")
    {
        $this->name = ucfirst($name);
        $this->price = $price;
        $this->currency = $currency;
    }

    public function formatPrice()
    {
        return number_format($this->price, decimals: 2);
    }

    public function getProduct()
    {
        return "Het product".$this -> name."kost ".$this ->currency. " ".$this->price;
    }
}

$muziek1 = new Product(name: " Techno Beats ", currency: "&euro;", price: 30);
echo $muziek1 -> getProduct();

?>