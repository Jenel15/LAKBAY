<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "jenel";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if(!$conn){
    die("Connection falied: ". mysqli_connect_error());
}