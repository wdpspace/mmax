<?php

include ("dbconnect.php");
$conn = dbconnect();

if(isset($_POST["submit"])){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $age = $_POST["age"];
    $pet = $_POST["pet"];

    $sql = "INSERT INTO users (firstname, lastname, age, pet) VALUES $firstname, $lastname, $age, $pet";
    
    

    $result = mysqli_connect($conn, $sql);

    if($result){
        echo "New user added successfully";
    }
    else{
        echo "Error adding new user";
        exit;
    }


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
</head>
<body>

    <H2>Create User</H2><br><br>

    <form action="create.php" method="post">

        <label for="firstname">First Name:</label>
        <input type="text" name="firstname" id="firstname">
        <br><br>

        <label for="lastname">Last Name:</label>
        <input type="text" name="lastname" id="lastname">
        <br><br>

        <label for="age">Age:</label>
        <input type="number" name="age" id="age">
        <br><br>

        <label for="pet">Pet:</label>
        <select name="pet" id="pet">
            <option value="cat">Cat</option>
            <option value="dog">Dog</option>
            <option value="bird">Bird</option>
            <option value="fish">Fish</option>
        </select>
        <br><br>

        <button type="submit" name="submit">Add User</button>
        
    </form>
</body>
</html>