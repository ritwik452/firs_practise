<?php include("../database/connection.php"); ?>

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
<title>Customer</title>
</head>
<?php include("../navbar/header.php"); ?>
<body>

      <div class="container mt-4">
        <div class="col-md-6">
            <div class="card shadow">
            <div class="card-header bg-primary text-white text-center">
                <h1>Customer</h1>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for=""><b>Customer Name</b></label>
                        <input type="text" name="name" pleaceholder="Enter name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for=""><b>Customer Email</b></label>
                        <input type="text" name="email" pleaceholder="Enter email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for=""><b>Customer City</b></label>
                        <input type="text" name="city" pleaceholder="Enter city" class="form-control">
                    </div>

                    <button class="btn btn-success" type="submit" name="save">Save</button>
                </form>
                   <?php
                        if(isset($_POST['save'])){
                            $name = $_POST['name'];
                            $email=$_POST['email'];
                            $city=$_POST['city'];

                            $query = "INSERT INTO customers (name,email,city) VALUES ('$name','$email','$city')";
                            $result=mysqli_query($conn, $query);
                            if ($result) {
                                echo "<script> alert('insert successfully'); window.location='view.php'; </script>";
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