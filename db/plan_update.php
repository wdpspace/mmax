<?php
    include ("dbconnect.php");

    $id = $_GET["id"];
    echo $id;
    $sql = "SELECT * FROM test WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
      $country = $row["country"];
      $plan_name = $row["plan_name"];
      $fee = $row["fee"];
    

    if(isset["submit"]){
      $id = $_GET["id"];
      $country = $_POST["country"];
      $plan_name = $_POST["plan_name"];
      $fee = $_POST["fee"];

      $sql = "UPDATE test SET country = '$country', plan_name = '$plan', fee = '$fee' WHERE id = '$id'";
      $result = mysqli_query($conn, $sql);
      
      if($result){
          header("location:plan_read.php");
      }
      else {
        exit ("Could not update record");
      }

       
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
<input type="text" name="country" id="country" value="<?php echo $country; ?>">
<br><br>

<label for="plan_name">Plan name:</label>
<select name="plan_name" id="plan_name">
  <option value="postpaid">Postpaid</option>
  <option value="prepaid">Prepaid</option>
</select>
<br><br>

<label for="fee">Fee:</label>
<input type="number" name="fee" id="fee" step="0.01" value="<?php echo $fee; ?>">
<br><br>

<button type="submit" name="submit">Update</button>

</form>

</body>
</html>