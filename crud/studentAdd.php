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
<title>Student Form</title>
</head>
<body>
    <div class="container mt-4">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header bg-primary text-white">
               <h3>Student Form</h3>
            </div>
            <div class="card-body">
                <form action="" method="post">
                  <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="enter name">
                  </div>
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="emial" name="email" class="form-control" placeholder="enter email">
                  </div>
                  <div class="form-group">
                    <label for="">City</label>
                    <input type="text" name="city" class="form-control" placeholder="enter city">
                  </div>
                  <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" name="phone" class="form-control" placeholder="enter phone number">
                  </div>
                  <button type="submit" name="add" class="btn btn-success">Add Student</button>

                </form>
                <?php
                include("database/connection.php");
                  if (isset($_POST['add'])) {
                    $name=$_POST['name'];
                    $email=$_POST['email'];
                    $city=$_POST['city'];
                    $phone=$_POST['phone'];
                    if (!empty($name) && !empty($email) && !empty($city) && !empty($phone)) {
                   $query="INSERT INTO student (name,email,city,phone) VALUES('$name','$email','$city','$phone')";
                    $result=mysqli_query($conn,$query);
                    if ($result) {
                     header("Location:student_list.php");
                        echo "add successfully";
                    }else{
                        echo "Failed";
                    }

                    }else {
                        echo "Please Fill all data";
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