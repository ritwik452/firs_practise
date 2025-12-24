<?php
include("../database/connection.php");
session_start();
?>
<?php
if (isset($_COOKIE['rem_email'])) {
    $email_value=$_COOKIE['rem_email'];
}else {
  $email_value="";
}
if (isset($_COOKIE['rem_pass'])) {
  $pass_value=$_COOKIE['rem_pass'];
}else {
  $pass_value="";
}

if (isset($_COOKIE['rem_email'])) {
    $rem_checked = "checked";
} else {
    $rem_checked = "";
}


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
            <input type="email" value="<?php echo $email_value ;?>" name="email" class="form-control" placeholder="Enter email" required>
        </div>

        <div class="mb-3">
            <label class="form-label"><b>Password</b></label>
            <input type="password"value="<?php echo $pass_value;?>" name="password" class="form-control" placeholder="Enter password" required>
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" name="remember" <?php if(isset($_COOKIE['rem_email'])) echo "checked"; ?>>
          <label class="form-check-label" for="remember">Remember Me</label>
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

        $query="SELECT * FROM users WHERE email='$email'";
        $result=mysqli_query($conn,$query);
        if (mysqli_num_rows($result)>0) {
            $row=mysqli_fetch_assoc($result);
            $database_pass=$row['password'];
            

            if (password_verify($password,$database_pass)) {
                $_SESSION['user_id']=$row['id'];
                $_SESSION['user_name']=$row['name'];
                 
                if (isset($_POST['remember'])) {
                  
                   setcookie("rem_email", $email, time()+3600, "/");
                   setcookie("rem_pass",$password,time()+3600,"/");
                }else {
                  setcookie("rem_email","",time()-3600,"/");
                  setcookie("rem_pass","",time()-3600,"/");
                }

                header("Location: index.php");
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
