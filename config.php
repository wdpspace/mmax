<?php
    $host = "localhost:3306";
    $username = "wdpspace_me";
    $password = "Hobbit$$7";
    $database = "wdpspace_mmax";

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // echo "Connected successfully!";
?>