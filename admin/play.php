<?php

require ("dbconnect.php");

$sql = "SELECT * FROM plans";
$conn = dbconnect();

$result = mysqli_query($conn, $sql);

$fields = mysqli_fetch_fields($result);

foreach ($fields as $field){
    echo "{$field->name} {$field->type} <br>";
};
