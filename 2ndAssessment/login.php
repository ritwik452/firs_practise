<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">

<style>
    body{
        background: #eef2f3;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .card{
        width: 400px;
        border-radius: 15px;
        box-shadow: 0px 0px 20px rgba(0,0,0,0.1);
    }
    .card-header{
        background: linear-gradient(45deg, #007bff, #00d4ff);
        color: white;
        text-align: center;
        font-size: 30px;
        padding: 20px 0;
        border-radius: 15px 15px 0 0;
    }
    .btn-success{
        width: 100%;
        border-radius: 25px;
        padding: 10px;
        font-size: 18px;
    }
</style>

</head>
<body>

<div class="card">
    <div class="card-header">Login</div>

    <div class="card-body">
        <form action="" method="post">
            <div class="form-group">
                <label><b>Email</b></label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email">
            </div>

            <div class="form-group">
                <label><b>Password</b></label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>

            <button class="btn btn-success" name="login">Login</button>
            
             <div class="text-center mt-3">
                <a href="register.php" 
                class="btn btn-outline-primary px-4 py-2"
                style="border-radius: 25px; font-weight: 600;">
                Create a New Account
                </a>
            </div>

        </form>

        <?php
        if (isset($_POST['login'])) {
            include("database/connection.php");

            $email = $_POST['email'];
            $password = $_POST['password'];

            $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);

                $_SESSION['userid'] = $row['id'];
                $_SESSION['username'] = $row['name'];

                header("Location: view.php");
                exit();
            } else {
                echo "<p class='text-danger mt-2'>Invalid Email or Password</p>";
            }
        }
        ?>
    </div>
</div>

</body>
</html>
