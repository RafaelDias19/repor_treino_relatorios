<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbphp7";
 
    $conn =new mysqli($servername, $username, $password, $dbname);
    mysqli_set_charset($conn,"utf8");
    
    if (mysqli_connect_error()) {
        trigger_error(mysqli_connect_error());
    }