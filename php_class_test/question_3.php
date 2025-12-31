<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>
</title>
</head>
<body>
<form action="" method="post">
    <h2>Select Color</h2>
    <select name="color" id="">
        <option value="Green">Green</option>
        <option value="Red">Red</option>
        <option value="Blue">Blue</option>
        <option value="White">white</option>
    </select>

    <h2>Hobbies</h2>
    <input type="checkbox" name="hobby[]" id="" value="Cricket">Cricket
    <input type="checkbox" name="hobby[]" id="" value="Footbal">Footbal
    <input type="checkbox" name="hobby[]" id="" value="Travell">Travell
    <input type="checkbox" name="hobby[]" id=""value="Eating">Eating
    <br>
    <button type="submit" class="btn btn-success" name="ok">Submit</button>
</form>
<?php
if (isset($_POST['ok'])) {
    $color=$_POST['color'];
    $hobby=$_POST['hobby'];
    echo "your fav color is- ".$color;
    echo "</br>";
    echo "your fav hobby is ";

    foreach($hobby as $hob){
      echo $hob."</br>";
    }
}
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>