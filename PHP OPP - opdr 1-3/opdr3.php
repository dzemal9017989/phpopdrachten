<?php

class Product
{
    public $name;

    public $price;

    public function formatPrice()
    {
        return number_format($this->price, decimals:2);
    }
}

$frisdrank1 = new Product();
$frisdrank1->name = "Coca-Cola";
$frisdrank1->price = 3;

$frisdrank2 = new Product();
$frisdrank2->name = "Fernandes";
$frisdrank2->price = 2;

$frisdrank3 = new Product();
$frisdrank3->name = "Fanta";
$frisdrank3->price = 5;

$frisdrank4 = new Product();
$frisdrank4->name = "Fanta zero";
$frisdrank4->price = 6;


echo $frisdrank1->formatPrice(). "<br>";
echo $frisdrank1->name. "<br>";
echo $frisdrank1->price. "<br>";

echo $frisdrank2->formatPrice(). "<br>";
echo $frisdrank2->name. "<br>";
echo $frisdrank2->price. "<br>";

echo $frisdrank3->formatPrice(). "<br>";
echo $frisdrank3->name. "<br>";
echo $frisdrank3->price. "<br>";

echo $frisdrank4->formatPrice(). "<br>";
echo $frisdrank4->name. "<br>";
echo $frisdrank4->price. "<br>";

var_dump($frisdrank1);
var_dump($frisdrank2);
var_dump($frisdrank3);
var_dump($frisdrank4);

