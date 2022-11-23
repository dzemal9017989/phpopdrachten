<?php
// Groter dan 150 19% duurder
$laptop = 1000;
// Kleiner dan 55 11% duurder
$software = 40;

// De rest 16% duurder
// boven 150 euro 19% erbij
if ($laptop > 150) {
    $som = $laptop * 1.19;
    echo "De oude prijs is &euro; $laptop,-
    </br>Na verhoging van 19% is de prijs : &euro; $som,-";
}
if($software < 55) {
    $som = $software * 1.11;
    echo "De oude prijs is &euro; $software,-
    </br>Na verhoging van 11% is de prijs : &euro; $som,-"; 
}
else
{
    $som = $rest * 1.16;
    echo "De oude prijs is &euro; $som,-
    </br>Na verhoging van 16% is de prijs : &euro; $som,-";
}
?>

