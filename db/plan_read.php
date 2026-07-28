<?php
    include("dbconnect.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Plans</title>
</head>
<body>
    <a href="plan_create.php">Add plan</a><br><br>

    <table>
        <thead>
            <tr>
                <th>Country</th>
                <th>Plan Name</th>
                <th>Fees</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM test";
            $result = mysqli_query($conn, $sql);
            if($result){
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row["id"];
                    $created = $row["created"];
                    $name = $row["plan_name"];
                    $fee = $row["fee"];

                    echo "<tr>
                            <td>{$id}</td>
                            <td>{$created}</td>
                            <td>{$name}</td>
                            <td>{$fee}</td>                 
                        /tr>"
                }
            }
        ?>
        </tbody>
    </table>
</body>
</html>