<?php
    include 'dbconnect.php';
    
    if(isset($_POST["submit"])){
      echo $_POST["country"] . "<br>";
      echo $_POST["plan_name"] . "<br>";
      echo $_POST["fee"] . "<br>";
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

<form method="post" action="add_plan.php">

<label for="country">Country:</label>
<input type="text" name="country" id="country">
<br><br>

<label for="plan_name">Plan name:</label>
<select name="plan_name" id="plan_name">
  <option value="postpaid">Postpaid</option>
  <option value="prepaid">Prepaid</option>
</select>
<br><br>

<label for="fee">Fee:</label>
<input type="number" name="fee" id="fee" step="0.01">
<br><br>

<button type="submit" name="submit">Submit</button>

</form>

</body>
</html>

<?php
?>