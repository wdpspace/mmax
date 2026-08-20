<?php

function getDropdown($conn, $table, $fieldName){

    $sql = "SELECT * FROM $table";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);
    
    while($row){
        echo "<option value='$carrier['carrier']>{$carrier['carrier']}</option>";
    }

}