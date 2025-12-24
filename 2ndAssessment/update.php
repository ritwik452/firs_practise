<?php
include("database/connection.php");
$id = $_GET['id'];

$query = "SELECT * FROM user WHERE id='$id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Update Page</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header text-center bg-primary text-white">
                <h1>Update Form</h1>
            </div>

            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label><b>Name</b></label>
                        <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label><b>Email</b></label>
                        <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label><b>Gender</b></label>
                        <select name="gender" class="form-control">
                            <option value="Male"   <?php if($row['gender']=="Male") echo "selected"; ?> >Male</option>
                            <option value="Female" <?php if($row['gender']=="Female") echo "selected"; ?> >Female</option>
                            <option value="Other"  <?php if($row['gender']=="Other") echo "selected"; ?> >Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label><b>Old Image</b></label><br>
                        <img src="<?php echo $row['img']; ?>" width="100">
                    </div>

                    <div class="form-group">
                        <label><b>New Image</b></label>
                        <input type="file" name="img" class="form-control">
                    </div>

                    <!-- FIXED: name="Update" → name="update" -->
                    <button type="submit" class="btn btn-success" name="update">Update</button>

                </form>

                <?php
                if (isset($_POST['update'])) {

                    $name   = $_POST['name'];
                    $email  = $_POST['email'];
                    $gender = $_POST['gender'];

                    // Check new image
                    if (!empty($_FILES['img']['name'])) {
                        $img_name = $_FILES['img']['name'];
                        $tmp_name = $_FILES['img']['tmp_name'];
                        $path = "image/" . $img_name;
                        move_uploaded_file($tmp_name, $path);
                    } else {
                        $path = $row['img']; // old image
                    }

                    // Update
                    $query = "UPDATE user SET name='$name', email='$email', gender='$gender', img='$path' WHERE id='$id'";
                    $result = mysqli_query($conn, $query);

                    if ($result) {
                        echo "<script>alert('Updated Successfully'); window.location='view.php';</script>";
                    } else {
                        echo "Error updating!";
                    }
                }
                ?>

            </div>
        </div>
    </div>
</div>

</body>
</html>
