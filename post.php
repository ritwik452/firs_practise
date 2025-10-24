<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Add Two number</h2>
  <form action="" method="POST">
  	<div class="form-group">
      <label for="pwd">Enter number:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="num1">
    </div>
    <div class="form-group">
      <label for="email">Enter second number:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="num2">
    </div>
   
    
    <button type="submit" class="btn btn-default" name="add">add</button>
  </form>
</div>

</body>
</html>

<?php
echo "<hr>";
echo "<h2>Using POST Method</h2>";

if(isset($_POST['add'])) {
$number1=$_POST['num1'];
$number2=$_POST['num2'];
$result=$number1 + $number2;
echo "<h1>The addition of two number is: ".$result."</h1>";
}
?>