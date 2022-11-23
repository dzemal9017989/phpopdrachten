<?php
//$uur = date ("H");
$uur = 18;

switch($uur) {
    case $uur > 6 && $uur < 12 : echo "Het is ochtend"; break;
        
    case $uur > 12 && $uur < 18 : echo "het is middag"; break;
            
    case $uur > 18 && $uur < 24 :  echo "het is avond";  break;     

    default : echo "het is nacht"; break;
}               
?>               

    
               

