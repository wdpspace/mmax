<?php

    $db_server = "localhost:3306";
    $db_user = "wdpspace_me1";
    $db_password = "Hobbit$$7";
    $db_name = "wdpspace_mmax";
    
    $conn = mysqli_connect($db_server, $db_user, $db_password, $db_name);

    if($conn){
        echo "Connection succesful";
    }
    else{
        echo "Could not connect to database";
    }