<?php
include("database/connection.php");

    $id = $_GET['id'];
    $query = "SELECT * FROM user WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "No record found!";
        exit;
    }

?>

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
<title>Update</title>
</head>
<body>
    <div class="container mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                  <h3>User Update</h3>
                </div>
                <div class="card-body">
                   <form action="" method="post">

                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text"name="name" class="form-control" value="<?php echo $row['name']?>" placeholder="enter name">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email"name="email" class="form-control" value="<?php echo $row['email']?>" placeholder="enter email">
                    </div>
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="text"name="phone" class="form-control" value="<?php echo $row['phone']?>" placeholder="enter phone number">
                    </div>
                    <div class="form-group">
                        <label for="">City</label>
                        <input type="text"name="city" class="form-control" value="<?php echo $row['city']?>" placeholder="enter city">
                    </div>
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text"name="address" class="form-control" value="<?php echo $row['address']?>" placeholder="enter address">
                    </div>
                   <button type="submit" class="btn btn-success" name="update">Update User</button>
                   </form>

                   <?php

                     if (isset($_POST['update'])) {
                        $name=$_POST['name'];
                        $email=$_POST['email'];
                        $phone=$_POST['phone'];
                        $city=$_POST['city'];
                        $address=$_POST['address'];
                        $query="UPDATE user set name='$name',email='$email',phone='$phone',city='$city',address='$address' where id='$id'";
                        $result=mysqli_query($conn,$query);
                        if ($result) {
                            header("Location: userlist.php");
                        }else {
                            echo "Failed";
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