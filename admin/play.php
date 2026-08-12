<?php

require ("dbconnect.php");

$sql = "SELECT * FROM plans";
$conn = dbconnect();

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_fields($result);

echo "$row";