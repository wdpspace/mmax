<?php

require ("dbconnect.php");
require ("dropdown_mapping.php");
$conn = dbconnect();

// Preload all dropdown data into a DROPDOWN array

$queries = [
    'carrier' => 'SELECT * FROM opt_carrier',
    'country' => 'SELECT * FROM opt_country'
];

$dropdown = [];

foreach($queries as $key => $sql){
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $dropdown[$key][] = $row;
    }
}

echo "<pre>";
print_r($dropdown);
echo "</pre>";
