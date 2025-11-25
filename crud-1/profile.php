<?php
include("database/connection.php");
session_start();
if (!isset($_SESSION['userid'])) {
    header("Location: login.php");
    exit();
}
$id=$_SESSION['userid'];
$query="SELECT * FROM user where id='$id'";
$result=mysqli_query($conn,$query);
$user=mysqli_fetch_assoc($result);
?>

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
<title>Profile</title>
</head>
<body>
<div class="container mt-4" >
   <div class="col-md-6">
    <div class="card">
        <div class="card-header bg-primary text-center text-white">
            <h3>User Details</h3>
        </div>
        
        <div class="card-body">
            <p><b>Name:</b> <?php echo $user['name']?> </p>
            <p><b>Email:</b> <?php echo $user['email']?> </p>
            <p><b>City:</b> <?php echo $user['city']?> </p>
            <p><b>Phone:</b> <?php echo $user['phone']?> </p>
        </div>
         <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
   </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>