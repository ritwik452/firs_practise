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
<title>Add user Page</title>
</head>
<?php include("../navbar/header.php"); ?>
<body>
     <div class="container mt-4">
        <div class="col-md-4">
            <div class="card shadow">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    <h1>User</h1>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <b><label for="">Name</label></b>
                            <input type="text" name="u_name" class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <b><label for="">Email</label></b>
                            <input type="email" name="u_email" class="form-control" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <b><label for="">Gender</label></b>
                            <br>
                            <input type="radio" name="u_gender" value="Male">Male
                            <input type="radio" name="u_gender" value="Female">Female 
                            <input type="radio" name="u_gender" value="other">Other
                            <br>
                        </div>
                        <div class="form-group">
                            <b><label for="">City</label></b>
                            <select name="city" class="form-control">
                                <option value="">Select</option>
                                <option value="Mumbai">Mumbai</option>
                                <option value="Kolkata">Kolkata</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Chennain">Chennai</option>
                                <option value="Rajasthan">Rajasthan</option>
                            </select>
                        </div>
                        <button class="btn btn-success" name="add" type="submit">Add</button>
                    </form>
                    <?php
                    include("../database/connection.php");
                      if (isset($_POST['add'])) {
                         $u_name=$_POST['u_name'];
                         $u_email=$_POST['u_email'];
                         $u_gender=$_POST['u_gender'];
                         $city=$_POST['city'];
                         $query="INSERT INTO user (u_name,u_email,u_gender,city) 
                                 VALUES('$u_name','$u_email','$u_gender','$city')";
                         $result=mysqli_query($conn,$query);
                         if ($result) {
                            echo "<script> alert('insert successfully'); window.location='view.php'; </script>";
                         }
                      }
                    ?>
                </div>
            </div>
        </div>
     </div>
     </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>