<?php

    $db_server = "localhost:3306";
    $db_user = "wdpspace_me";
    $db_password = "Hobbit$$7";
    $db_name = "wdpspace_mmax";
    
    try {
    $conn = mysqli_connect($db_server, $db_user, $db_password, $db_name);
    }
    catch {
        echo "Could not connect to database";
    }

    if($conn){
        echo "Connection succesful";
    }
   