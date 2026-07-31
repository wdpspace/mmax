<?php

    include ("dbconnect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Admin</title>
</head>
<body>

    <H2>Create User</H2><br><br>
    
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>created</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Age</th>
                <th>Pet</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                    $sql = "SELECT * FROM users";
                    $conn = dbconnect();
                    $result = mysqli_query($conn, $sql);
                    if($result){
                        //continue from here
                    }
                ?>
            </tr>
        </tbody>

    </table>
</body>
</html>
