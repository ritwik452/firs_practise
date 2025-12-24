<?php
include("../database/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f0f2f5;
        }
        .register-box {
            max-width: 450px;
            margin: 60px auto;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .form-control {
            border-radius: 8px;
            height: 45px;
        }
        .btn-custom {
            height: 45px;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="register-box">
    <h3 class="text-center mb-4">Create Account</h3>

    <form method="POST">

        <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email Address</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <button type="submit" name="register" class="btn btn-primary w-100 btn-custom">Register</button>

        <p class="text-center mt-3">
            Already have an account? <a href="login.php">Login</a>
        </p>

    </form>
    <?php
    if (isset($_POST['register'])) {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $hashedpassword=password_hash($password,PASSWORD_DEFAULT);
        $query="INSERT INTO users (name,email,password,created_at) VALUES ('$name','$email','$hashedpassword',NOW())";
        $result=mysqli_query($conn,$query);
        if ($result) {
            echo "<div class='alert alert-success mt-3'>Registration Successful!</div>";
         }else{
             echo "<div class='alert alert-danger mt-3'>Something went wrong!</div>";
        } 

    }
    ?>
</div>

</body>
</html>