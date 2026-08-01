<?php

include ("dbconnect.php");
$conn = dbconnect();
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

if(isset($_POST["submit"])){
    
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $age = $_POST["age"];
    $pet = $_POST["pet"];

    $sql = "INSERT INTO users (firstname, lastname, age, pet) VALUES ('$firstname', '$lastname', '$age', '$pet')";
    
    $conn = dbconnect();

    $result = mysqli_query($conn, $sql);

    if($result){
        //echo "New user added successfully";
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

    <form action="create.php" method="post">
        
        <label for="id">First Name:</label>
        <input type="text" name="id" id="id" value=<?php echo $row['firstname'] ?> readonly>
        <br><br>

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