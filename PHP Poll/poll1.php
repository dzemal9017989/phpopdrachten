<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "poll";

// Maak verbinding met de database
$conn = new mysqli($servername, $username, $password, $dbname);

// Controleer of de verbinding is geslaagd
if ($conn->connect_error) {
  die("Verbinding mislukt: " . $conn->connect_error);
}

// Haal de vraag op uit de 'poll' tabel
$sql = "SELECT vraag FROM poll WHERE id=1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Output de vraag
  while($row = $result->fetch_assoc()) {
    echo "Stelling van de maand: \"" . $row["vraag"] . "\"<br><br>";
  }
} else {
  echo "Geen resultaten gevonden";
}

// Haal de opties op uit de 'optie' tabel
$sql = "SELECT optie FROM optie WHERE poll=1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Output de opties als radiobuttons
  while($row = $result->fetch_assoc()) {
    echo "<input type=\"radio\" name=\"optie\" value=\"" . $row["optie"] . "\"> " . $row["optie"] . "<br>";
  }
} else {
  echo "Geen resultaten gevonden";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verwerk de stem van de gebruiker
    $optie = $_POST["optie"];
  
    // Voeg een stem toe aan de database
    $sql = "UPDATE optie SET stemmen = stemmen + 1 WHERE optie = '$optie'";
    if ($conn->query($sql) === TRUE) {
      echo "Bedankt voor uw stem!";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
  ?>
  
  <form method="post">
  <?php
  // Output de opties als radiobuttons
  $sql = "SELECT optie FROM optie WHERE poll=1";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "<input type=\"radio\" name=\"optie\" value=\"" . $row["optie"] . "\"> " . $row["optie"] . "<br>";
    }
  } else {
    echo "Geen resultaten gevonden";
  }
  ?>
  
  <input type="submit" name="submit" value="Verzenden">
  </form>