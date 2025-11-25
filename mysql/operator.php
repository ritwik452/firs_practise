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
<title>REGISTRATION FORM</title>
</head>
<body>
<div class="container mt-4">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header bg-primary text-white">
               <h3>REGISTRATION FORM</h3>
            </div>
            <div class="card-body">
                <form action="" method="post">
                  <div class="form-group">
                    <label for="">First Name</label>
                    <input type="text" name="fname" class="form-control" placeholder="enter name">
                  </div>
                  <div class="form-group">
                    <label for="">Last Name</label>
                    <input type="text" name="lname" class="form-control" placeholder="enter name">
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
                  <div class="form-group">
                    <label for="">Marks</label>
                    <input type="number" name="marks" class="form-control" placeholder="Enter Marks">
                  </div>
                  <div class="form-group">
                    <label for="">Course</label>
                    <select name="course" id="" class="form-control">
                      <option value="">Select Course</option>
                      <option value="PHP">PHP</option>
                      <option value="Python">Python</option>
                      <option value="Java">Java</option>
                      <option value="C#">C#</option>
                    </select>
                  </div>

                  <button type="submit" name="add" class="btn btn-success">Register</button>

                </form>
                <?php
                include("database/connection.php");
                  if (isset($_POST['add'])) {
                    $fname=$_POST['fname'];
                    $lname=$_POST['lname'];
                    $email=$_POST['email'];
                    $city=$_POST['city'];
                    $phone=$_POST['phone'];
                    $marks=$_POST['marks'];
                    $course=$_POST['course'];
                    if (!empty($fname) && !empty($lname) && !empty($email) && !empty($city) && !empty($phone) && !empty($marks) && !empty($course)) {
                   $query="INSERT INTO user (fname,lname,email,city,phone,marks,course) VALUES('$fname','$lname','$email','$city','$phone','$marks','$course')";
                    $result=mysqli_query($conn,$query);
                    if ($result) {
                        echo "<script>alert('submit successfully'); window.location='list1.php'; </script>";
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