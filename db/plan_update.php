<?php
    include ("dbconnect.php");
    
    $id = $_GET['id'];
    
    $sql = "SELECT * FROM test WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
      $country = $row['country'];
      $plan_name = $row['plan_name'];
      $fee = $row['fee'];


    if(isset($_POST['update'])){
      $country = $_POST['country'];
      $plan_name = $_POST['plan_name'];
      $fee = $_POST['fee'];

      $sql = "UPDATE test SET country = '$country', plan_name = '$plan_name', fee = '$fee' WHERE id = $id";

        try{
          mysqli_query($conn, $sql);
          echo "Update successful";
          //header("location:plan_read.php");
        }
        catch (mysqli_sql_exception) {
          exit("Could not add new plan");
        }
        
        mysqli_close($conn);
      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Plan</title>
</head>
<body>

<form method="post" action="plan_update.php">

<label for="country">Country:</label>
<input type="text" name="country" id="country" value="<?php echo $country;   ?>">
<br><br>

<label for="plan_name">Plan name:</label>
<select name="plan_name" id="plan_name" value="<?php echo $plan_name;  ?>">
  <option value="postpaid">Postpaid</option>
  <option value="prepaid">Prepaid</option>
</select>
<br><br>

<label for="fee">Fee:</label>
<input type="number" name="fee" id="fee" step="0.01" value="<?php echo $fee; ?>">
<br><br>

<button type="submit" name="update">Update</button>

</form>

</body>
</html>