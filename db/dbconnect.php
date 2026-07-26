<?php

    $db_server = "localhost:3306";
    $db_user = "wdpspace_me";
    $db_password = "Hobbit$$7";
    $db_name = "wdpspace_mmax";
    $conn = "";
    
    try {
    $conn = mysqli_connect($db_server, $db_user, $db_password, $db_name);
    }
    catch (mysqli_sql_exception) {
        echo "Could not connect to database. <br>";
    }

    if($conn){
        echo "Connection succesful! <br>";
    }
   