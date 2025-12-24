<?php
include("../database/connection.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: #f0f2f5;
    }
    .login-card {
      max-width: 400px;
      margin: auto;
      margin-top: 80px;
      padding: 25px;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0px 0px 15px rgba(0,0,0,0.1);
    }
    .login-card h3 {
      text-align: center;
      margin-bottom: 25px;
    }
    .btn-custom {
      width: 100%;
    }
  </style>
</head>
<body>

<div class="login-card">
    <h3>Login</h3>

    <form method="POST">
    
        <div class="mb-3">
            <label class="form-label"><b>Email</b></label>
            <input type="email" name="email" class="form-control" placeholder="Enter email" required>
        </div>

        <div class="mb-3">
            <label class="form-label"><b>Password</b></label>
            <input type="password" name="password" class="form-control" placeholder="Enter password" required>
        </div>

        <button type="submit" class="btn btn-primary btn-custom" name="login">Login</button>

        <div class="text-center mt-3">
            <small>Don't have an account? <a href="register.php">Register</a></small>
        </div>
    </form>
    <?php
    if (isset($_POST['login'])) {
        $email=$_POST['email'];
        $password=$_POST['password'];

        $query="SELECT * FROM admin WHERE email='$email'";
        $result=mysqli_query($conn,$query);
        if (mysqli_num_rows($result)>0) {
            $row=mysqli_fetch_assoc($result);
            $database_pass=$row['password'];
            

            if (password_verify($password,$database_pass)) {
                $_SESSION['admin_id']=$row['id'];
                $_SESSION['admin_name']=$row['name'];
                header("Location: index1.php");
            }else {
                echo "<script>alert('Incorrect Password'); window.location='login.php';</script>";
            exit;
            }
        }else {
             echo "<script>alert('Email Not Found'); window.location='login.php';</script>";
        exit;
        }

    }
    ?>

</div>

</body>
</html>
