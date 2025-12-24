<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include("database/connection.php");
$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM users WHERE id = '$user_id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #eef2f7; }
        .profile-box {
            max-width: 600px;
            margin: 50px auto;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .avatar {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #1abc9c;
            margin-bottom: 15px;
        }
        .btn-edit {
            border-radius: 30px;
            padding: 8px 20px;
        }
    </style>
</head>
<body>

<div class="profile-box text-center">

    <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" class="avatar">

    <h3 class="mt-3"><?= $row['name'] ?></h3>
    <p class="text-muted"><?= $row['email'] ?></p>

    <hr>

    <div class="text-start">
        <p><strong>User ID:</strong> <?= $row['id'] ?></p>
        <p><strong>Joined:</strong> <?= $row['created_at'] ?></p>
    </div>

    <hr>

    <a href="edit_profile.php" class="btn btn-primary btn-edit">Edit Profile</a>
    <a href="index.php" class="btn btn-secondary btn-edit">Back to Dashboard</a>

</div>

</body>
</html>
