<?php

class Product
{
    public $name = "Een bepaald frisdrank";
}

$frisdrank1 = new Product();
$frisdrank1->name = "Coca-Cola";

$frisdrank2 = new Product();
$frisdrank2->name = "Fernandes";

$frisdrank3 = new Product();
$frisdrank3->name = "Fanta";

$frisdrank4 = new Product();
$frisdrank4->name = "Fanta zero";

var_dump($frisdrank1);
var_dump($frisdrank2);
var_dump($frisdrank3);

echo $frisdrank1->name. "<br>";
echo $frisdrank2->name. "<br>";
echo $frisdrank3->name. "<br>";

$frisdrank1->name = "Dr. Pepper";
echo $frisdrank1->name;

