<?php include("database/connection.php") ?>
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
<title>List Member</title>
</head>
<body>
   <div class="container mt-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header text-center bg-primary text-white">
                <h1>Form</h1>
            </div>
            <div class="card-body">
               <form action="" method="post" enctype="multipart/form-data">
                 <div class="form-group">
                    <b><label for="">Name::</label></b>
                    <input type="text" name="name" placeholder="Enter name" class="form-control">
                 </div>
                 <div class="form-group">
                    <b><label for="">Email::</label></b>
                    <input type="email" name="email" placeholder="Enter email" class="form-control">
                 </div>
                 <div class="form-group">
                    <b><label for="">Password::</label></b>
                    <input type="password" name="password" placeholder="Enter password" class="form-control">
                 </div>
                 <div class="form-group">
                    <b><label for="">Gender::</label></b>
                    <select class="form-control" name="gender">
                        <option value="">Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                 </div>
                 <div class="form-group">
                    <b><label for="">Image Upload::</label></b>
                    <input type="file" name="img" class="form-control">
                 </div>
                 <button type="submit" class="btn btn-success" name="add">Add</button>
                 <a href="login.php">All Ready have an account?</a>
               </form>
               
               <?php
                       if (isset($_POST['add'])) {

                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        $gender = $_POST['gender'];

                     
                        $img_name = $_FILES['img']['name'];
                        $tmp_name = $_FILES['img']['tmp_name'];

                        $path = "image/" . $img_name;

                        move_uploaded_file($tmp_name, $path);

                        $query = "INSERT INTO user (name,email,password,gender,img) 
                                 VALUES ('$name','$email','$password','$gender','$path')";
                        
                        $result = mysqli_query($conn, $query);

                        if ($result) {
                           echo "<script> alert('data insert successfully'); window.location='login.php'; </script>";
                        } else {
                           echo "Error!";
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