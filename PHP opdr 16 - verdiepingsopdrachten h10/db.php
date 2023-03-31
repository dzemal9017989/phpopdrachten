<?php

$Sname = "localhost";
$DBuser = "root";
$DBPwd = "";
$DBname = "School";

$conn = mysqli_connect($Sname, $DBuser, $DBPwd, $DBname);

if(!$conn){
    die("Connection error". mysqli_connect_error());
}
// var_dump($conn);