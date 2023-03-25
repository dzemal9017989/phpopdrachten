<h1>Stelling van de maand: "PHP is de leukste programmeertaal"</h1>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "poll";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "SELECT * FROM optie";
$result = mysqli_query($conn, $sql);

?>
<form action="" method="post">
 <input type='radio' id='html' name='optie' value='1'>
 <label for='1'>Inderdaad, PHP is het helemaal</label><br>
 <input type='radio' id='html' name='optie' value='2'>
 <label for='2'>PHP is leuk, maar niet het leukste</label><br>
 <input type='radio' id='html' name='optie' value='3'>
 <label for='3'>PHP is saai</label><br>
 <input type='radio' id='html' name='optie' value='4'>
 <label for='4'>Geen mening</label><br>
 <button type="submit" name="verzend">Verzenden</button>
 </form>
<?php

if(isset($_POST['verzend'])){
    $id = $_POST['optie'];
    $sql = "UPDATE optie SET stemmen = stemmen + 1 WHERE id = $id";
    mysqli_query($conn, $sql);
}

?>