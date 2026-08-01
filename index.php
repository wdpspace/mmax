<?php

    include ("dbconnect.php");

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
            <?php
                $sql = "SELECT * FROM users";
                    $conn = dbconnect();
                    $result = mysqli_query($conn, $sql);
                    if($result){
                        while($row = mysqli_fetch_assoc($result))
                            {
                               $id = $row['id'];
                               $created = $row['created'];
                               $firstname = $row['firstname'];
                               $lastname = $row['lastname'];
                               $age = $row['age'];
                               $pet = $row['pet'];
                        
                                echo "<tr>";
                                echo "<td> $id </td>"; 
                                echo "<td> $created </td>";
                                echo "<td> $firstname </td>";
                                echo "<td> $lastname </td>";
                                echo "<td> $age </td>";
                                echo "<td> $pet </td>";
                                echo "<td> <a href='update.php?id=$id> </td>";
                                echo "<td></td>";
                                echo "</tr>";
                            }
                    }
            ?>
            
        
        </tbody>

    </table>    
</body>
</html>
