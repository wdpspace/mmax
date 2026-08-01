<?php

include ("dbconnect.php");

$conn = dbconnect();

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id = $id";

$result = mysqli_query($conn, $sql);

if($result){
    echo "Row deleted successfully!";
    //header("location:index.php");
}
else{
    echo "Could not delete row.";
}