<?php
$mysqli = new mysqli("localhost", "wedding_factory", "mrzA2eKv1Ghd", "twf_gallery");
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;   
    }
    $mysqli2 = new mysqli("localhost", "wedding_factory", "mrzA2eKv1Ghd", "twf_gallery");
    if ($mysqli2->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli2->connect_error;   
    }
    $mysqli3 = new mysqli("localhost", "wedding_factory", "mrzA2eKv1Ghd", "twf_gallery");
    if ($mysqli3->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli3->connect_error;   
    }
?>
