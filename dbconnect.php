<?php

    $db_server = "localhost:3306";
    $db_user = "wdpspace_me";
    $db_password = "Hobbit$$7";
    $db_name = "wdpspace_mmax";
    
    $conn = mysqli_connect($db_server, $db_user, $db_password, $db_name);

    if(mysqli_connect_error()){
        echo mysqli_connect_error();
        exit;
    }
    