<?php
// http://localhost/project2/Project2php/Project2php/

// Sesie starten
session_start();

// Controleren of er al een sessie is
if(isset($_SESSION['teller'])){

    // Teller verhogen met 1: ++
    $_SESSION['teller']++;
}
else // Nieuwe teller starten bij 1
{
    $_SESSION['teller'] = 1; 
}

// Bericht met het aantal bezoeken.
$bericht="U heeft deze pagina " . $_SESSION['teller']. " keer bekeken. ";

echo $bericht;

?>