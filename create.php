<?php



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

    <form action="">

        <label for="firstname">First Name:</label>
        <input type="text" name="firstname" id="firstname">

        <label for="lastname">Last Name:</label>
        <input type="text" name="lastname" id="lastname">

        <label for="age">Age:</label>
        <input type="number" name="age" id="age">

        <label for="pet">Pet:</label>
        <select name="pet" id="pet">
            <option value="cat">Cat</option>
            <option value="dog">Dog</option>
            <option value="bird">Bird</option>
            <option value="fish">Fish</option>
        </select>

        <button type="submit" name="submit">Add User</button>
        
    </form>
</body>
</html>