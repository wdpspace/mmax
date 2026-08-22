<?php

require ("dbconnect.php");
require ("dropdown_mapping.php");
$conn = dbconnect();

if($_SERVER['REQUEST_METHOD'] === 'POST'){

}

// Preload all dropdown data into a DROPDOWN array

$queries = [
    'gen_carrier' => 'SELECT carrier FROM opt_carrier',
    'gen_country' => 'SELECT country FROM opt_country',
    'gen_currency' => 'SELECT currency FROM opt_country',
    // Add addtional dropdown options here ...
];

$dropdown = [];

foreach($queries as $key => $sql){
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $dropdown[$key][] = $row;
    }
}

// Fields

$sql = "SELECT * FROM plans";
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
                    <th>Field</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($fields as $field) {?>
                <tr>
                    <td><?= $field->name; ?></td>
                    <td><?php  
                        if(array_key_exists($field->name, $dropdown)){ ?>
                            <select name="<?=$field->name ?>" id="<?=$field->name ?>">
                                <?php foreach($dropdown[$field->name] as $option){ ?>
                                <option value="<?=$option ?>"><?=$option ?></option>
                                <?php } ?>
                            </select>
                        <?php } 
                        else{ ?>
                        <input type="text" name="<?=$field->name ?>" id="<?=$field->name ?>">
                        
                        <?php }  ?>
                    </td>
                </tr>
                <?php } ?>
                
            
            </tbody>
        </table>
    </form>
</body>
</html>

