<?php
include('database/connection.php');

$message = "";

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 
    $role = 'user';
    $query="SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){
        $message = "Email already registered!";
    } else {
        $query = "INSERT INTO users (name,email,password,role,status) 
        VALUES ('$name','$email','$password','$role','active')";
        $result=mysqli_query($conn,$query);
        if($result){
            $message = "Registration successful! You can login now.";
        } else {
            $message = "Error: ".mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Registration | Prokashani</title>
    <style>
        body{font-family:Arial; background:#f1f5f9; padding:50px;}
        .container{max-width:400px; margin:auto; background:#fff; padding:30px; border-radius:10px; box-shadow:0 2px 10px rgba(0,0,0,0.1);}
        h2{text-align:center; margin-bottom:20px;}
        input[type=text], input[type=email], input[type=password]{width:100%; padding:10px; margin:8px 0; border-radius:5px; border:1px solid #ccc;}
        button{width:100%; padding:12px; background:#2563eb; color:#fff; border:none; border-radius:5px; font-weight:bold; cursor:pointer;}
        button:hover{background:#1d4ed8;}
        .message{color:red; text-align:center; margin-bottom:10px;}
        a{color:#2563eb; text-decoration:none;}
    </style>
</head>
<body>

<div class="container">
    <h2>User Registration</h2>
    <?php if($message != ""){ echo "<p class='message'>$message</p>"; } ?>
    <form method="POST">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="register">Register</button>
    </form>
    <p style="text-align:center; margin-top:10px;">Already registered? <a href="login.php">Login here</a></p>
</div>

</body>
</html>
