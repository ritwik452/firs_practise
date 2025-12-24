<?php
include("../database/connection.php");
$u_id=$_GET['u_id'];
$query="SELECT * FROM user WHERE u_id='$u_id'";
$result=mysqli_query($conn,$query);
if (mysqli_num_rows($result)>0) {
    $row=mysqli_fetch_assoc($result);
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
<title>Edit Page</title>
</head>
<?php include("../navbar/header.php"); ?>
<body>
    <div class="container mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    <h1>User</h1>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <b><label for="">Name</label></b>
                            <input type="text" name="u_name" value="<?php echo $row['u_name']; ?>" class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <b><label for="">Email</label></b>
                            <input type="email" name="u_email" value="<?php echo $row['u_email']; ?>" class="form-control" placeholder="Enter Email">
                        </div>
                                 <div class="form-group">
                                    <b><label for="">Gender</label></b><br>

                                    <input type="radio" name="u_gender" value="Male" 
                                    <?php if($row['u_gender']=="Male") echo "checked"; ?> > Male

                                    <input type="radio" name="u_gender" value="Female" 
                                    <?php if($row['u_gender']=="Female") echo "checked"; ?> > Female

                                    <input type="radio" name="u_gender" value="Other" 
                                    <?php if($row['u_gender']=="Other") echo "checked"; ?> > Other
                                </div>

                        <div class="form-group">
                            <b><label for="">City</label></b>
                            <select name="city" class="form-control">
                                <option value="">Select</option>
                                <option value="Mumbai" <?php if($row['city']=="Mumbai") echo "Selected"; ?>>Mumbai</option>
                                <option value="Kolkata" <?php if($row['city']=="Kolkata") echo "Selected"; ?> >Kolkata</option>
                                <option value="Delhi" <?php if($row['city']=="Delhi") echo "Selected"; ?> >Delhi</option>
                                <option value="Chennai" <?php if($row['city']=="Chennai") echo "Selected"; ?> >Chennai</option>
                                <option value="Rajasthan" <?php if($row['city']=="Rajasthan") echo "Selected"; ?> >Rajasthan</option>
                            </select>
                        </div>
                        <button class="btn btn-success" name="update" type="submit">Update</button>
                    </form>
                    <?php
                    
                      if (isset($_POST['update'])) 
                        {
                         $u_name=$_POST['u_name'];
                         $u_email=$_POST['u_email'];
                         $u_gender=$_POST['u_gender'];
                         $city=$_POST['city'];
                         $query="UPDATE user SET u_name='$u_name',u_email='$u_email',u_gender='$u_gender',city='$city'
                                WHERE u_id='$u_id'"; 
                         $result=mysqli_query($conn,$query);
                         if ($result) {
                            
                            echo "<script> alert('update successfully'); window.location='view.php' </script>";
                            
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