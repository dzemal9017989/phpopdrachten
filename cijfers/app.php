<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=3-2-2023","root","");
    $query = $db->prepare("SELECT * FROM cijfers");
    $query->execute();
    $result = $query->fetchAll (PDO::FETCH_ASSOC);
    foreach($result as $data) {
        echo $data["id"] . "";
        echo $data["leerling"] . "";
        echo $data["cijfer"] . "<br>";
    }
}catch (PDOException $e) {
    die("Error!: " . $e->getMessage());
}
?>