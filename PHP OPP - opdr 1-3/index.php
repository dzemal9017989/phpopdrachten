<?php

require_once 'opdr9.php';

$music1 = new Music( name:10, genre:['rap', 'pop'], listen:'5');

echo $music1->getName();

var_dump($music1);

?>
