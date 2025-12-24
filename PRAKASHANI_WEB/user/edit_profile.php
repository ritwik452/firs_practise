<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include("database/connection.php");

$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM users WHERE id='$user_id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { background: #eef2f7; }
        .edit-box {
            max-width: 550px;
            margin: 40px auto;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .btn-custom {
            border-radius: 30px;
            height: 45px;
        }
    </style>
</head>
<body>

<div class="edit-box">
    <h3 class="text-center mb-4">Edit Your Profile</h3>

    <?php if(isset($success)) echo "<div class='alert alert-success'>$success</div>"; ?>
    <?php if(isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>

    <form method="POST">

        <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" name="name" value="<?php echo $row['name'] ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email Address</label>
            <input type="email" name="email" value="<?php echo $row['email'] ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">New Password (Optional)</label>
            <input type="password" name="password" class="form-control" placeholder="New Or Old Password">
        </div>

        <button type="submit" name="update" class="btn btn-primary w-100 btn-custom">Update Profile</button>

        <p class="text-center mt-3">
            <a href="profile.php">⬅ Back to Profile</a>
        </p>

    </form>
    <?php
        if (isset($_POST['update'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password=$_POST['password'];

        if (!empty($_POST['password'])) {
            $password = password_hash($password, PASSWORD_DEFAULT);
            $query = "UPDATE users SET name='$name', email='$email', password='$password' WHERE id='$user_id'";
        } else {
            $query = "UPDATE users SET name='$name', email='$email' WHERE id='$user_id'";
        }
            $query=mysqli_query($conn,$query);
        if ($result) {
            $success = "Profile updated successfully!";
            header("location:profile.php");
        } else {
            $error = "Something went wrong!";
        }
    }

    ?>
</div>

</body>
</html>
