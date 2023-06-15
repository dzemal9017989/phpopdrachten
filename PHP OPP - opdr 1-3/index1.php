<?php

declare(strict_types=1);

require_once 'Music.php';
require_once 'ListenList.php';

$piet = new ListenList();

$Music1 = new Music(name: "Andre Hazes", genre: "rap", listen: 5);
$Music2 = new Music(name: "Frans Duijts", genre: "hiphop", listen: 2);

$piet->addMusic($Music1);
$piet->addMusic($Music2);

var_dump($piet);