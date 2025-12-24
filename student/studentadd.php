<?php include("connection.php"); ?>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    mysqli_query($conn, "INSERT INTO student(name) VALUES('$name')");
    header("Location: studentview.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Student</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">

<h2>Add Student</h2>

<form method="POST">
    <div class="form-group">
        <label>Student Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <button name="submit" class="btn btn-success mt-2">Save</button>
</form>

</div>
</body>
</html>
