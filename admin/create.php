<?php

require ("dbconnect.php");

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    

}

$sql = "SELECT * FROM plans";
$conn = dbconnect();
$result = mysqli_query($conn, $sql);

$fields = mysqli_fetch_fields($result);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Plan</title>
</head>
<body>
    <h1>Add New Plan</h1><br><br>
    <a href="index.php">Back to Summary</a><br><br>

    <form action="">
        <table>
            <thead>
                <tr>
                    <?php foreach($fields as $field){
                            echo "<th>" . $field->name . "</th>";
                        }
                    ?>
                </tr>
            </thead>
            <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                            foreach ($row as $value){
                                echo "<td>$value</td>";
                            }
                        echo "</tr>";
                    }

                    ?>
            
            </tbody>
        </table>
    </form>



</body>
</html>