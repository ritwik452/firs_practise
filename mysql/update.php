<?php
include("database/connection.php");
$id = $_GET['id'];

$query = "SELECT * FROM user WHERE id='$id'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<title>REGISTRATION FORM</title>
</head>
<body>

<div class="container mt-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3>UPDATE FORM</h3>
            </div>

            <div class="card-body">

                <form action="" method="post">
                    
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="fname" value="<?php echo $row['fname']; ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="lname" value="<?php echo $row['lname']; ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>City</label>
                        <input type="text" name="city" value="<?php echo $row['city']; ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="phone" value="<?php echo $row['phone']; ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Marks</label>
                        <input type="number" name="marks" value="<?php echo $row['marks']; ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Course</label>
                        <select name="course" class="form-control">
                            <option value="">Select Course</option>
                            <option value="PHP" <?php if($row['course']=="PHP") echo "selected"; ?>>PHP</option>
                            <option value="Python" <?php if($row['course']=="Python") echo "selected"; ?>>Python</option>
                            <option value="Java" <?php if($row['course']=="Java") echo "selected"; ?>>Java</option>
                            <option value="C#" <?php if($row['course']=="C#") echo "selected"; ?>>C#</option>
                        </select>
                    </div>

                    <button type="submit" name="update" class="btn btn-success">Update</button>

                </form>

                <?php
                if (isset($_POST['update'])) {

                    $fname  = $_POST['fname'];
                    $lname  = $_POST['lname'];
                    $email  = $_POST['email'];
                    $city   = $_POST['city'];
                    $phone  = $_POST['phone'];
                    $marks  = $_POST['marks'];
                    $course = $_POST['course'];

                    if (!empty($fname) && !empty($lname) && !empty($email) &&
                        !empty($city) && !empty($phone) && !empty($marks) &&
                        !empty($course)) {

                        $query = "UPDATE user SET 
                                fname='$fname',
                                lname='$lname',
                                email='$email',
                                city='$city',
                                phone='$phone',
                                marks='$marks',
                                course='$course'
                                WHERE id='$id'";

                        $result = mysqli_query($conn, $query);

                        if ($result) {
                            echo "<script>alert('Update Successful'); window.location='list1.php'; </script>";
                        } else {
                            echo "Failed to Update!";
                        }

                    } else {
                        echo "Please Fill All Fields!";
                    }
                }
                ?>

            </div>
        </div>
    </div>
</div>

</body>
</html>
