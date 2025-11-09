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
<title>User Registration</title>
</head>
<body>
<div class="container mt-4">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header bg-primary text-white">
            <h3>Registration Form</h3>
        </div>

        <div class="card-body">
            <form action="" method="post">
            <div class="form-group">
                <label for="">User Name</label>
                <input type="text" name="username" class="form-control" placeholder="enter user name">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" placeholder="enter password">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" placeholder="enter email">
            </div>
            <div class="form-group">
                <label for="">city</label>
                <input type="text" name="city" class="form-control" placeholder="enter city">
            </div>
            
            <button type="submit" class="btn btn-primary" name="registration">Registration</button>
            <a href="Login.php" class="btn btn-info">Login</a>
            </form>

            <?php
            include("database/connection.php");
                if (isset($_POST['registration'])) {
                    $username=$_POST['username'];
                    $password=$_POST['password'];
                    $email=$_POST['email'];
                    $city=$_POST['city'];
                    $query="SELECT * FROM user where email='$email'";
                    $result=mysqli_query($conn,$query);
                    if (mysqli_num_rows($result)) {
                        echo "This email have already exit";
                    }else {
                        if (!empty($username) && !empty($password) && !empty($email) && !empty($city)) {
                        $query="INSERT INTO user (username,password,email,city) VALUES ('$username','$password','$email','$city')";
                        $result=mysqli_query($conn,$query);
                        if ($result) {
                            header("Location: login.php");
                            echo "Data save Successfully";
                        }else {
                            echo "Failed";
                        }
                       }

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