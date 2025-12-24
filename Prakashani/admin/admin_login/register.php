<?php
include("../database/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Form</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f0f2f5;
        }
        .register-box {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            margin-top: 50px;
        }
        .form-title {
            font-weight: 700;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="register-box">
                <h3 class="form-title">Create Your Account</h3>

                <form method="post">

                    <div class="mb-3">
                        <label class="form-label"><b>Full Name</b></label>
                        <input type="text"  name="name"class="form-control" placeholder="Enter your full name" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><b>Email Address</b></label>
                        <input type="email" name="email"class="form-control" placeholder="Enter your email" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><b>Password</b></label>
                        <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><b>Confirm Password</b></label>
                        <input type="password" name="c_password" class="form-control" placeholder="Confirm password" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100" name="register">Register</button>

                    <p class="text-center mt-3">
                        Already have an account? <a href="login.php">Login</a>
                    </p>

                </form>
                <?php
                if (isset($_POST['register'])) {
                    $name=$_POST['name'];
                    $email=$_POST['email'];
                    $password=$_POST['password'];
                    $c_password=$_POST['c_password'];
                    if ($password !=$c_password) {
                        echo "<div class='alert alert-danger mt-3'>Password & Confirm Password do NOT match!</div>";
                    }else {
                        $hashedpassword=password_hash($password, PASSWORD_DEFAULT);
                        $query="INSERT INTO admin (name,email,password) VALUES('$name','$email','$hashedpassword') ";
                        $result=mysqli_query($conn,$query);
                        if ($result) {
                            echo "<div class='alert alert-success mt-3'>Registration Successful!</div>";
                        }else{
                            echo "<div class='alert alert-danger mt-3'>Something went wrong!</div>";
                        }
                    }

                }
                ?>
            </div>

        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
