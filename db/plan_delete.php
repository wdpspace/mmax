<?php

include ("dbconnect.php");

if(isset($_GET["id"])){
   $id = $_GET["id"];
   
   $sql = "DELETE FROM test WHERE id = $id";

   $result = mysqli_query($conn, $sql);

   if($result){
    //echo "Delete successful";
    header("location:plan_read.php");
   }
   else{
    exit("Could not delete. <br>");
   }
}