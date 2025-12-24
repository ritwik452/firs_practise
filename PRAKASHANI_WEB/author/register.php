<?php
include('database/connection.php');

$error = '';
$success = '';

if(isset($_POST['register'])){
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = 'author';

    if(isset($_FILES['profile_photo']) && $_FILES['profile_photo']['error'] == 0){
        $photo_name = $_FILES['profile_photo']['name'];
        $tmp_name = $_FILES['profile_photo']['tmp_name'];

        $path = "../uploads/cover/".$photo_name;

        if(move_uploaded_file($tmp_name, $path)){
        
            $query= "INSERT INTO users (name,email,password,role,profile_photo) 
                    VALUES ('$name','$email','$password','$role','$path')";
                    $result=mysqli_query($conn,$query);

            if($result){
                $success = "Author registered successfully! <a href='login.php'>Login now</a>";
            } else {
                $error = "Database Error: ".mysqli_error($conn);
            }
        } else {
            $error = "Failed to upload photo!";
        }
    } else {
        $error = "Profile photo is required!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Author Registration | Prokashani</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {background:#eef2f3; display:flex; justify-content:center; align-items:center; height:100vh; font-family:'Poppins', sans-serif;}
        .register-card {background:#fff; padding:30px; border-radius:12px; box-shadow:0 4px 12px rgba(0,0,0,0.1); width:400px;}
        .register-card h3 {margin-bottom:20px; text-align:center;}
    </style>
</head>
<body>

<div class="register-card">
    <h3>✍️ Author Registration</h3>

    <?php if($error != ''){ ?>
        <div class="alert alert-danger"><?php echo $error; ?></div>
    <?php } ?>
    <?php if($success != ''){ ?>
        <div class="alert alert-success"><?php echo $success; ?></div>
    <?php } ?>

    <form method="POST" action="" enctype="multipart/form-data">
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" placeholder="Full Name" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="mb-3">
            <label>Profile Photo</label>
            <input type="file" name="profile_photo" class="form-control" accept="image/*" required>
        </div>
        <button type="submit" name="register" class="btn btn-success w-100">Register</button>
    </form>

    <p class="mt-3 text-center">Already have an account? <a href="login.php">Login</a></p>
</div>

</body>
</html>
