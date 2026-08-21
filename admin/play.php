<?php

require ("dbconnect.php");
$conn = dbconnect();

$dropdowns = [];

$sql1 = "SELECT * FROM opt_carrier";
$sql2 = "SELECT * FROM opt_country";

$result = mysqli_query($conn, $sql1);
while ($row = mysqli_fetch_assoc($result)){
    $dropdown[] = $row;
}

$result = mysqli_query($conn, $sql2);
while ($row = mysql_fetch_assoc($result)){
    $dropdown[] = $row;
}

echo "<pre>";
print_r($dropdown);
echo "</pre>";
