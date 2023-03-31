<?php
include_once('db.php');

function cijferSytm($conn){
    $sqli = "SELECT * FROM cijfersytm";
    $result = mysqli_query($conn, $sqli);
    while ($row = mysqli_fetch_assoc($result)){
        $naam = $row['leerling'];
        $cijfer = $row['cijfer'];

        $aantal = '
        <tr>
        <td>'.$naam.'</td>
        <td>'.$cijfer.'</td>
        </tr>
        ';
        echo $aantal;
    }
    echo "<br>";
}
?>
<br>
<br>
<table border="1" width="250">
    <tr>
    <th>Leerling</th>
    <th>Cijfer</th>
  </tr>
  <?php
    cijferSytm($conn);
  ?>
</table>
<?php
$sqli2 = "SELECT cijfer FROM cijfersytm;";
    $result2 = mysqli_query($conn, $sqli2);
    $sqli3 = "SELECT * FROM cijfersytm ORDER BY cijfer DESC";
    $result3 = mysqli_query($conn, $sqli3);
    $sqli4 = "SELECT * FROM cijfersytm ORDER BY cijfer ASC";
    $result4 = mysqli_query($conn, $sqli4);
    $aantalcijfers = mysqli_num_rows($result2);
    $Cmath = 0;
    while ($row = mysqli_fetch_assoc($result2)){
        $gemmiddeldcijfer = $row['cijfer'];
        $Cmath = $Cmath + $gemmiddeldcijfer;
    }
    echo "het gemiddelde cijfer is een: ".$Cmath / $aantalcijfers."<br>";

    if ($row = mysqli_fetch_assoc($result3)){
        $laagstecijfer = $row['cijfer'];
        echo "het hoogste cijfer is een: ".$laagstecijfer."<br>";
    }

    if ($row = mysqli_fetch_assoc($result4)){
        $HOOGSTECIJFER = $row['cijfer'];
        echo "het laagste cijfer is een: ".$HOOGSTECIJFER."<br>";
    }