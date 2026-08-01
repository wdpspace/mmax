<?php

    include ("dbconnect.php");

    $sql = "SELECT * FROM users";
    $conn = dbconnect();

    $result = $result = mysqli_query($conn, $sql);

    if(!$result){
        echo "Error loading data.";
        exit;
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Admin</title>
</head>
<body>

    <H2>Create User</H2><br><br>

    <a href="create.php">Add new user</a><br><br>
    
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>created</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Age</th>
                <th>Pet</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['created'] ?></td>
                <td><?php echo $row['firstname'] ?></td>
                <td><?php echo $row['lastname'] ?></td>
                <td><?php echo $row['age'] ?></td>
                <td><?php echo $row['pet'] ?></td>
                <td><a href="update.php?id= <?php echo $row['id']?>">Update</a></td>
                <td><a href="delete.php?id= <?php echo $row['id']?>">Delete</a></td>
            </tr>
            <?php endwhile; ?>
            
        
        </tbody>

    </table>    
</body>
</html>
