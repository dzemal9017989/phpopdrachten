<?php
try{
    $db = new PDO("mysql:host=localhost;dbname=fietsenmaker", "root", "");
    if(isset($_POST['inloggen'])){
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
        $password = $_POST['password'];
        $query = $db->prepare("SELECT * FROM gebruikers WHERE username = :user");
        $query->bindParam("user", $username);
        $query->execute();
        if($query->rowCount() == 1){
            $result = $query->fetch(PDO)
        }
    }
}