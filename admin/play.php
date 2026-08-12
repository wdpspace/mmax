<?php

require ("dbconnect.php");

$sql = "SELECT * FROM plans";
$conn = dbconnect();

$result = mysqli_query($conn, $sql);

$fields = mysqli_fetch_fields($result);

var_dump($fields);

/*foreach ($fields as $field){
    echo "{$field->name} <br>";
};*/
