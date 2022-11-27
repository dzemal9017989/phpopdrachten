<h1>Leeftijd voor scooterrijbewijs en om te stemmen</h1>
<form action="" method="post">
<input type="text" name="leeftijd" placeholder="Wat is je leeftijd?">
Stempas ontvangen?
<input type="radio" name="stempas" value="true">Ja (true)
<input type="radio" name="stempas" value="true">Nee (false)
<input type="submit" value="verzenden">
</form>

<?php
// opdracht 8 hoofdstuk 4
// Haal de leeftijd op uit het formulier
// Kijk met isset of er een waarde is
if(isset($_POST['leeftijd']))
{
    $leeftijd = $_POST['leeftijd'];
    $stempas = $_POST['stempas'];
    $examen = 16;

    if($leeftijd >= $examen){
        echo "Je mag praktijkexamen voor je scooterrijbewijs doen.</br>";
    }
    else{
        echo "Je mag geen parktijkexamen voor je scooterrijbewijs doen.</br>";
    }
    if ($stempas == 'true' && $leeftijd >= 18) {
        echo "Je mag stemmen en hebt een stempas ontvangen";
    }
    else {
        echo "Je mag niet stemmen, want je hebt geen stempas";
    }
}
?>
