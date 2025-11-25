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
<title>Register</title>
</head>
<body>
 <div class="container mt-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-center text-white">
               <h3>Register Form</h3>
            </div>
            <div class="card-body">
                <form action=""method="post" class="text-danger">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control " style="border-radius:20px;" placeholder="enter name">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" style="border-radius:20px;" placeholder="enter email">
                    </div>
                    <div class="form-group">
                        <label for="">City</label>
                        <input type="text" name="city" class="form-control" style="border-radius:20px;" placeholder="enter city">
                    </div>
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="text" name="phone" class="form-control" style="border-radius:20px;" placeholder="enter phone number">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control" style="border-radius:20px;" placeholder="enter password">
                    </div>
                    
                       <button type="submit" class="btn btn-success" name="register" style="border-radius:20px;">Save</button>
                     <a href="login.php">All ready have an account?</a>
                </form>
                <?php
                    include("database/connection.php");
                   if (isset($_POST['register'])) {
                       $name=$_POST['name'];
                       $email=$_POST['email'];
                       $city=$_POST['city'];
                       $phone=$_POST['phone'];
                       $password=$_POST['password'];
                    
                       if (!empty($name) && !empty($email) && !empty($city) && !empty($phone) && !empty($password)) {
                              $query="SELECT * FROM user where email='$email'";
                               $result=mysqli_query($conn,$query);

                               if (mysqli_num_rows($result)>0) {
                             echo "Email already exit";
                       }
                       else {
                         $query="INSERT INTO user (name,email,city,phone,password) VALUES ('$name','$email','$city','$phone','$password')";
                             $result=mysqli_query($conn,$query);
                            if ($result) {
                                //echo "save successfully";
                                     header("Location: login.php");
                             
                        }else {
                            echo "failed";
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