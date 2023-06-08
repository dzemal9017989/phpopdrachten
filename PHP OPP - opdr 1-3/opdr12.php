<?php

declare(strict_types=1);

require_once 'opdr11-1.php';
require_once 'ListenList.php';

$kees = new ListenList();

$Music1 = new Music( name:"Jeroen van der Boom", genre: "volk", listen: 10);
$Music2 = "Alleen Omhoog";

$kees->addMusic($Music1);
$kees->addMusic($Music2);

echo $Music1->getName();

var_dump($Music1);