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
<title>Title</title>
</head>
<body>

<div class="container mt-4">
   <div class="col-md-6">
    <form method="post" action="">
    <div>
        <label>Name:</label>
        <input type="text" name="name" placeholder="Enter Name" value="<?php echo $name?>">
    </div>
    <div>
        <label>Email:</label>
        <input type="email" name="email"  placeholder="Enter Email" value="<?php echo $email ?>">
    </div>
    <div>
        <label>Feedback:</label>
        <input type="text" name="feedback"  placeholder="Enter Feedback" value="<?php echo $feedback ?>">
    </div>
    <br>
    <button type="submit" class="btn btn-success" name="submit">Submit</button>
</form>
    <?php
    if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];

    if (empty($name) || empty($email) || empty($feedback)) {
        echo "all field require";
    } else {
        echo  $name."</br>";
        
        echo  $email."</br>";
        echo  $feedback."</br>";
    
    }
}
    ?>
   </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>