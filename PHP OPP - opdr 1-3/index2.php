<?php
declare(strict_types=1);

require_once 'ListenList1.php';
require_once 'Music.php';

$piet = new ListenList();

$Music1 = new Music(name: "Jan", genre: "pop", listen: 3);
$Music2 = new Music(name: "Piet", genre: "rock", listen: 12);

$piet->addMovie($Music1);
$piet->addMovie($Music2);
$piet->addMovie($Music1);

echo $Music1->getName();
var_dump($piet);