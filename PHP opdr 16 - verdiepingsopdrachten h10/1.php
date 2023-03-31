<?php
include_once('db.php');


function generatePassword($length = 10) {
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $chars_length = strlen($chars);
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $chars[rand(0, $chars_length - 1)];
    }
    return $password;
}

$password = generatePassword(10);
echo "<p>Willekeurig wachtwoord van 10 tekens: " . $password . "</p><br>";