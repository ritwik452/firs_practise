<?php
include('database/connection.php');
session_start();

$message = "";

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email='$email' AND role='user'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row['password'])){
        
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['name'];
            echo "<script>window.location='index.php';</script>";
            exit;
        } else {
            $message = "Incorrect password!";
        }
    } else {
        $message = "Email not registered!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Login | Prokashani</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background:#f1f5f9;
            padding:50px;
        }
        .container{
            max-width:400px;
            margin:auto;
            background:#fff;
            padding:30px;
            border-radius:10px;
            box-shadow:0 2px 10px rgba(0,0,0,0.1);
        }
        h2{
            text-align:center;
            margin-bottom:20px;
        }
        input[type=email], input[type=password]{
            width:100%;
            padding:10px;
            margin:8px 0;
            border-radius:5px;
            border:1px solid #ccc;
        }
        button{
            width:100%;
            padding:12px;
            background:#2563eb;
            color:#fff;
            border:none;
            border-radius:5px;
            font-weight:bold;
            cursor:pointer;
        }
        button:hover{background:#1d4ed8;}
        .message{
            color:red;
            text-align:center;
            margin-bottom:10px;
        }
        a{color:#2563eb; text-decoration:none;}
    </style>
</head>
<body>

<div class="container">
    <h2>User Login</h2>
    <?php if($message != ""){ echo "<p class='message'>$message</p>"; } ?>
    <form method="POST">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="login">Login</button>
    </form>
    <p style="text-align:center; margin-top:10px;">Don't have an account? <a href="register.php">Register here</a></p>
</div>

</body>
</html>