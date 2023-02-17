<h1>INGELOGD</h1>

<a href="Uitloggen.php">Uitloggen</a>
<?php
session_start();
if($_SESSION['login']==true){
    echo "<td>" . $_SESSION['username']. "</td>";
}
?>