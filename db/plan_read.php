<?php
    include("dbconnect.php");

    $sql = "SELECT * FROM test";

    $results = mysqli_query($conn, $sql);

    try{

    }
    catch{

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Plans</title>
</head>
<body>
    <a href="plan_add.php">Add plan</a><br><br>

    <table>
        <thead>
            <tr>
                <th>Country</th>
                <th>Plan Name</th>
                <th>Fees</th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>
</body>
</html>