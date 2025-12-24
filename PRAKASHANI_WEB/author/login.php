<?php
session_start();
include('database/connection.php');

$error = '';

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    

    $query = "SELECT * FROM users WHERE email='$email' AND role='author'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row['password'])){
            $_SESSION['author_id'] = $row['id'];
            $_SESSION['author_name'] = $row['name'];
            $_SESSION['author_photo'] = $row['profile_photo'];

            header("Location: index.php");
            exit();
        } else {
            $error = "Invalid password!";
        }
    } else {
        $error = "Author not found!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Author Login | Prokashani</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {background:#eef2f3; display:flex; justify-content:center; align-items:center; height:100vh; font-family:'Poppins', sans-serif;}
        .login-card {background:#fff; padding:30px; border-radius:12px; box-shadow:0 4px 12px rgba(0,0,0,0.1); width:400px;}
        .login-card h3 {margin-bottom:20px; text-align:center;}
    </style>
</head>
<body>

<div class="login-card">
    <h3>👤 Author Login</h3>

    <?php if($error != ''){ ?>
        <div class="alert alert-danger"><?php echo $error; ?></div>
    <?php } ?>

    <form method="POST" action="">
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <button type="submit" name="login" class="btn btn-success w-100">Login</button>
    </form>

    <p class="mt-3 text-center">Don't have an account? <a href="register.php">Register</a></p>
</div>

</body>
</html>
