<?php
session_start();
?>
<h1>Array items toevoegen in een sessie</h1>
<form action="" method="post">
<input type="text" value="Appel" name="item"/><br>
<input type="submit" value="Toevoegen" name="submit"/>
</form><br>
<a href="7.6opdrachten8.php?knop=schudden">Schudden met shuffle</a><br>
<a href="7.6opdrachten8.php?knop=az">Sorteren van a-z, met sort</a><br>
<a href="7.6opdrachten8.php?knop=wissen">Session wissen</a><br><br>

<?php
// Maak een array met sessie.
error_reporting(0);
if(!$_SESSION['lijst']){
    $_SESSION['lijst'] = array();
}

// Controleer met isset of de Post niet leeg is en trim dit valide.
if(isset($_POST['item']) && trim($_POST['item']) !='') {

    // Voeg een waarde toe.
    $veld = trim($_POST['item']);

    // Controleer of er dezelfde items zijn.
    if(!in_array($veld, $_SESSION['lijst'], true)){

        // Voeg toe aan de sessie
        $_SESSION['lijst'][] = $veld;
        
        if (!in_array($veld, $_SESSION['lijst'], true)){
            echo "Niet toegevoegd <br />";
        } else{
            echo "<br />Toegevoegd:";
        }
    }else{
        echo "</br>Dit item bestaat al.";
    }
}

if(!empty($_SESSION['lijst'])){
    echo "<h2>Winkelmand</h2>";

    foreach($_SESSION['lijst'] as $waarden){
        echo "$waarden <br />";
    }
}

if(isset($_GET['knop'])) {
    if($_GET['knop'] == "az") {

    sort($_SESSION['lijst']);
    }
}

if(isset($_GET['knop'])){
    if($_GET['knop'] == "wissen"){
        $_SESSION = array();
        session_destroy();
        echo "Alle sessievariabelen worden verwijderd.";

        header ('Refresh: 0; url=7.6opdrachten8.php');
    }
}

?>