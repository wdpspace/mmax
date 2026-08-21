<?php

require ("dbconnect.php");
$conn = dbconnect();

$dropdowns = [];
$fields = [];

$sql1 = "SELECT * FROM plans";
$sql2 = "SELECT * FROM opt_carrier";
$sql3 = "SELECT * FROM opt_country";

$result = mysqli_query($conn, $sql1);
while($row = mysqli_fetch_fields($result)){
    $fields[] = $row;
}

echo "<pre>";
print_r($fields);
echo "</pre>";

/*
$result = mysqli_query($conn, $sql1);
while ($row = mysqli_fetch_assoc($result)){
    $dropdown['carrier'][] = $row;
}

$result = mysqli_query($conn, $sql2);
while ($row = mysqli_fetch_assoc($result)){
    $dropdown['country'][] = $row;
}

//print_r($dropdown['carrier'][0]);


echo "<pre>";
print_r($dropdown);
echo "</pre>";
*/