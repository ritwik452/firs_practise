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
<title>Login Page</title>
</head>
<body>
  <div class="container mt-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-center text-white">
             <h3>Login Form</h3>
            </div>
            <div class="card-body">
              <form action="" method="post">
                <div class="form-group">
                    <label for="">User Email</label>
                    <input type="email" name="email" class="form-control"  placeholder="enter user name">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="enter password">
                </div>
                
                <button type="submit" name="login" class="btn btn-success ">Login</button>
                <a href="register.php">Don't Have an account</a>
              </form>
              <?php 
              include("database/connection.php");
              session_start();

                if (isset($_POST['login'])) {
                    $email=$_POST['email'];
                    $password=$_POST['password'];
                    
                    $query="SELECT * FROM user where email='$email' && password='$password'";
                    $result=mysqli_query($conn,$query);
                    if (mysqli_num_rows($result)>0) {
                        $row=mysqli_fetch_assoc($result);
                        $_SESSION['userid']=$row['id'];
                        $_SESSION['username']=$row['name'];
                        
                        header("Location: profile.php");
                    }else {
                        
                        echo "invailed email and password";
                    }
                }  
                
                ?>
            </div>
        </div>
    </div>
  </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>