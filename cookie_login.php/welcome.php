<?php
session_start();
if (!isset($_COOKIE['user'])) {
    header("location: Login.php");
    exit();
}
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
<title>Welcome Page</title>
</head>
<body>
    <h1>Welcome Page</h1>
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
    Voluptates perferendis exercitationem minus aspernatur recusandae nemo aut? 
    Amet quo vitae quis illum ipsam, nesciunt magni? 
    Similique sequi asperiores ex assumenda. 
    Omnis iste laboriosam ex quia consequuntur hic sunt temporibus aliquam vitae aut, 
    deleniti perferendis quidem ipsam nam dicta impedit qui possimus!
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore voluptatibus nam distinctio. 
    Velit recusandae quisquam optio quae neque ut repellendus?</p>
    <a href="logout.php">Logout</a>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>