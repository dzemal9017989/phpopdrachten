<form method="post">
<p>Prijs<input type="text" name="bedrag" value=""></p>
<p> Korting <input type="text" name="korting" value="10"></p>
<input type="submit" name="berekenen" value="click">
</form>

<?php
if(isset($_POST['korting'])){
    $korting = $_POST['korting'];
    $bedrag = $_POST['bedrag'];
    $prijs = $bedrag / 100 * $korting;
    $echtePrijs = $bedrag - $prijs;
    echo "Bedrag inclusief %$korting is $echtePrijs,-";
}
?>