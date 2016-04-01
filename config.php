<?php
$mysqli = new mysqli("localhost", "the_wedding_fact", "weddingfact", "wedding_factory");
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;   
    }
    $mysqli2 = new mysqli("localhost", "the_wedding_fact", "weddingfact", "wedding_factory");
    if ($mysqli2->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli2->connect_error;   
    }
    $mysqli3 = new mysqli("localhost", "the_wedding_fact", "weddingfact", "wedding_factory");
    if ($mysqli3->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli3->connect_error;   
    }
?>
