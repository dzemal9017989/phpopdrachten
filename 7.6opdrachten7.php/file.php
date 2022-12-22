<form method="post">
    Startkapitaal<input type="text" name="start" value="100000"> <br>
    Rentepercentage<input type="text" name="rente" value="4" max="8"> <br>
    Jaarlijkse opname<input type="text" name="opname" value="5000" min="4700"> <br>
    <input type="submit" value="Toevoegen">
</form>
<?php
// waarden standaard instellen
if(isset($_POST["start"])){
    $start = $_POST["start"];
}else{
    $start = 100000;
}
if(isset($_POST["rente"])){
    $rente = $_POST["rente"];
}else{
    $rente = 4;
}
if(isset($_POST["opname"])){
    $opname = $_POST["opname"];
}else{
    $opname = 5000;
}
    $bedrag = $start/100*(100+$rente);
    $jaren = 0;

// minimale opname in 100 jaar
if ($opname > 4079)
{
    // het bedrag moet groter zijn dan de opname
    while ($bedrag > $opname)
    {
        $bedrag -= $opname;
        $bedrag = $bedrag / 100 * (100 + $rente);
        $jaren++;
    }
    echo "U kunt $jaren jaar lang $opname euro opnemen.";
}
else
{
    echo "De opname is te laag binnen 100 jaar.";
}
?>