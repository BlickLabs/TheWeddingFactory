<?php
$mysqli = new mysqli("mysql.hostinger.mx", "u183599560_root", "2011301308", "u183599560_twfg");
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;   
    }
    $mysqli2 = new mysqli("mysql.hostinger.mx", "u183599560_root", "2011301308", "u183599560_twfg");
    if ($mysqli2->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli2->connect_error;   
    }
    $mysqli3 = new mysqli("mysql.hostinger.mx", "u183599560_root", "2011301308", "u183599560_twfg");
    if ($mysqli3->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli3->connect_error;   
    }
?>
