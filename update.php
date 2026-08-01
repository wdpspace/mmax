<?php

include ("dbconnect.php");
$conn = dbconnect();

if($_SERVER['REQUEST_METHOD'] === 'GET'){

    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        $row = mysqli_fetch_assoc($result);
    }
    else{
        echo "Error getting data for record to be updated.";
        exit;
    }
}

if(isset($_POST["submit"])){
    
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $age = $_POST["age"];
    $pet = $_POST["pet"];

    $sql = "UPDATE users SET firstname = '$firstname', lastname = '$lastname', age = '$age', pet = '$pet' WHERE id = $id";
    
    $conn = dbconnect();

    $result = mysqli_query($conn, $sql);

    if($result){
        //echo "User updated successfully";
        header("location:index.php");

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

    <H2>Update User</H2><br><br>

    <form action="update.php" method="post">
        
        <label for="id">id:</label>
        <input type="text" name="id" id="id" value=<?php echo $row['id'] ?> readonly>
        <br><br>

        <label for="firstname">First Name:</label>
        <input type="text" name="firstname" id="firstname" value=<?php echo $row['firstname'] ?>>
        <br><br>

        <label for="lastname">Last Name:</label>
        <input type="text" name="lastname" id="lastname" value=<?php echo $row['lastname'] ?>>
        <br><br>

        <label for="age">Age:</label>
        <input type="number" name="age" id="age" value=<?php echo $row['age'] ?>>
        <br><br>

        <label for="pet">Pet:</label>
        <select name="pet" id="pet" value=<?php echo $row['pet'] ?>>
            <option value="cat">Cat</option>
            <option value="dog">Dog</option>
            <option value="bird">Bird</option>
            <option value="fish">Fish</option>
        </select>
        <br><br>

        <button type="submit" name="submit">Update</button>
        
    </form>
</body>
</html>