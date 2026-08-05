<?php

require ("dbconnect.php");

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
    <title>Plan Summary</title>

    <style>
        
        table{
            font-family: Arial, sans-serif;
            font-size: 10px;
        }
        th, td{
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Plan Summary</h1><br><br>
    <a href="create.php">Add new plan</a><br><br>

    <form action="">
        <table>
            <thead>
                <tr>
                    <th>Update</th>
                    <th>Delete</th>
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
                    
                        echo"<td><a href='href=update.php?id="$row['id']">Update</a></td>";
                        echo"<td><a href='href=delete.php?id="$row['id']">Delete</a></td>";
                        
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