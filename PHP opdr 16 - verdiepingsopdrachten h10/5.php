<?php
include_once('db.php');


$sqli5 = "SELECT * FROM optie WHERE Optie = 'yes';";
$result5 = mysqli_query($conn, $sqli5);
$sqli6 = "SELECT * FROM optie WHERE Optie = 'no';";
$result6 = mysqli_query($conn, $sqli6);
$sqli7 = "SELECT * FROM optie WHERE Optie = 'saai';";
$result7 = mysqli_query($conn, $sqli7);
$sqli8 = "SELECT * FROM optie WHERE Optie = 'geenstem';";
$result8 = mysqli_query($conn, $sqli8);

if ($row = mysqli_fetch_assoc($result5)){
    $yesstem = $row['stemmen'];
}else{
    $yesstem = 0;
}
if ($row = mysqli_fetch_assoc($result6)){
    $nosstem = $row['stemmen'];
}else{
    $nosstem = 0;
}
if ($row = mysqli_fetch_assoc($result7)){
    $saaistem = $row['stemmen'];
}else{
    $saaistem = 0;
}
if ($row = mysqli_fetch_assoc($result8)){
    $geenstem = $row['stemmen'];
}else{
    $geenstem = 0;
}
$totalstemmen = $yesstem + $nosstem + $saaistem = $geenstem;
?>
<br>
<br>
<table border="1" width="500">
<tr>
<th>Stelling van de maand: "Php is de leukste programmeertaal"</th>
</tr>
<tr>
<th>Aantal uitgebrachte stemmen: <?php ?></th>
</tr>
</table>
<table border="1" width="500">
<tr>
<th>inderdaad, PHP is het helemaal</th>
<th><?php echo $yesstem ?></th>
<!-- <th><?php echo $yesstem / $totalstemmen * 100 . "%"?></th> -->
</tr>
<tr>
<th>PHP is de slechtste</th>
<th><?php echo $nosstem ?></th>
<th><?php echo $nosstem / $totalstemmen * 100 . "%"?></th>
</tr>
<tr>
<th>PHP is saai</th>
<th><?php echo $saaistem ?></th>
<th><?php echo $saaistem / $totalstemmen * 100 . "%"?></th>
</tr>
<tr>
<th>geen mening</th>
<th><?php echo $geenstem ?></th>
<th><?php echo $geenstem / $totalstemmen * 100 . "%"?></th>
</tr>
</table>