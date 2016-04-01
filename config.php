<?php
$mysqli = new mysqli("localhost", "wedding_fact", "mrzA2eKv1Ghd", "wedding_factory");
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;   
    }
    $mysqli2 = new mysqli("localhost", "wedding_fact", "mrzA2eKv1Ghd", "wedding_factory");
    if ($mysqli2->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli2->connect_error;   
    }
    $mysqli3 = new mysqli("localhost", "wedding_fact", "mrzA2eKv1Ghd", "wedding_factory");
    if ($mysqli3->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli3->connect_error;   
    }
?>
