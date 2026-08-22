<?php

require ("dbconnect.php");
require ("dropdown_mapping.php");
$conn = dbconnect();

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
        $dropdown[$key] = $row;
    }
}

echo "<pre>";
print_r($dropdown);
echo "</pre>";
