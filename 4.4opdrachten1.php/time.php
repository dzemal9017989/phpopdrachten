<?php

//$uur = date ("H");
$uur = 20;

if($uur >6 & $uur <12)
{
    echo "Het is ochtend";
}

elseif ($uur >12 & $uur <18)
{
    echo "Het is middag";
}

elseif($uur >18 & $uur <24)
{
    echo "het is avond";
}
else
{
    echo "het is nacht";
}

?>