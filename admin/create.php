<?php

require ("dbconnect.php");
require ("dropdown_mapping.php");
$conn = dbconnect();

if($_SERVER['REQUEST_METHOD'] === 'POST'){

}

// Preload all dropdown data into a DROPDOWN array

$dropdown = [];

$sql_carrier = "SELECT * FROM opt_carrier";
$sql_country = "SELECT * FROM opt_country";

$result = mysqli_query($conn, $sql_carrier);
while($row = mysqli_fetch_assoc($result)){
    $dropdown[] = $row;
}

$opt_carrier = [];

while ($row = mysqli_fetch_assoc($result)) {
    $opt_carrier[] = $row;
}
/*
echo "<pre>";
print_r($mapping);
echo "</pre>";
*/

echo "<pre>";
print_r($opt_carrier);
echo "</pre>";

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
                    <th>Field</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($fields as $field){
                        echo "<tr>";
                        echo "<td>";
                        echo $field->name;
                        echo "</td>";
                        echo "<td>";
                            // Check if field name exit in mapping array.
                            if(array_key_exists($field->name, $mapping)){
                                $table = $mapping[$field->name]['table'];
                                $label = $mapping[$field->name]['label'];
                                $name = $mapping[$field->name]['name'];
                                $id = $mapping[$field->name]['id'];

                                $sql = "SELECT * FROM $table";
                                $result = mysqli_query($conn, $sql);

                                echo "<select name='{$name}' id='{$id}'>";
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo "<option value='{$row[$label]}'>$row[$label]</option>";
                                    }
                                echo "</select>";
                            }
                            else{
                                echo "<input type= 'text' name='{$field->name}' id='{$field->name}'>";                          
                            // If it doesn't exist, then create input field.
                            }
                        
                        echo "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </form>



</body>
</html>

