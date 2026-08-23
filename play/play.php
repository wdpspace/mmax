<?php

require ("../config/dbconnect.php");
$conn = dbconnect();

if($_SERVER['REQUEST_METHOD'] === 'POST'){

}

// FIELDS - Get all the fields from the plans table.

$sql = "SELECT * FROM plans";
$result = mysqli_query($conn, $sql);
$fields = mysqli_fetch_fields($result); // Array of objects

// DROPDOWN - Preload dropdown options into array

$dropdown = []; // Initialise as an empty array.

$queries = [
    'gen_carrier' => 'SELECT carrier FROM opt_carrier',
    'gen_country' => 'SELECT country FROM opt_country',
    'fee_currency' => 'SELECT currency FROM opt_country',
    // Add addtional dropdown options here ...
];

foreach($queries as $key => $sql){
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $dropdown[$key][] = $row;
    }
}

foreach($fields as $field) {
    if(array_key_exists($field->name, $dropdown)){ // use isset instead?
        echo $field->name. " is a dropdown. <br>";
    } else {
        echo $field->name. " is an input. <br>";
    }
}

/*
echo "<pre>";
print_r($dropdown);
echo "</pre>";
*/
