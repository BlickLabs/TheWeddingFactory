<?php
$mysqli = new mysqli("localhost", "root", "", "galery_twf");
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;   
    }
    $mysqli2 = new mysqli("localhost", "root", "", "galery_twf");
    if ($mysqli2->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;   
    }
    $mysqli3 = new mysqli("localhost", "root", "", "galery_twf");
    if ($mysqli3->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;   
    }
?>
