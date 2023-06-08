<?php

declare(strict_types=1);

require_once 'opdr10.php';

$Music1 = new Music( name: "Jan Smit", genre: 'volk', listen: 10);

echo $Music1->getName();

var_dump($Music1);