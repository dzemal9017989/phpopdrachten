<?php
include_once('db.php');

function countSql($conn, $style){
    $sqli = "SELECT * FROM verdiep WHERE browser = '$style' ";
    $result = mysqli_query($conn, $sqli);

    $aantal = mysqli_num_rows($result);
    echo $aantal;
}
echo " <br>";
echo " <br>";
?>
<table border="1" width="250">
  <tr>
    <th>Webbrowser</th>
    <th>bezoeken</th>
  </tr>
  <tr>
    <td>Chrome</td>
    <td><?php countSql($conn, "Chrome");?></td>
  </tr>
  <tr>
    <td>FireFox</td>
    <td><?php countSql($conn, "FireFox");?></td>
  </tr>
  <tr>
    <td>Internet Explorer</td>
    <td><?php countSql($conn, "InternetExplorer");?></td>
  </tr>
  <tr>
    <td>Linux</td>
    <td><?php countSql($conn, "Linux");?></td>
  </tr>
</table>