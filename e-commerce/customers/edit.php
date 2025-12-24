<?php include("../database/connection.php"); ?>

<?php
    $id = $_GET['id'];
    $query = "SELECT * FROM customers WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
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
<title>edit page</title>
</head>
<body>
    <div class="container mt-4">
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-header bg-warning text-dark text-center">
                <h1>Edit Customer</h1>
            </div>

            <div class="card-body">
                <form action="" method="post">

                    <div class="form-group">
                        <label><b>Customer Name</b></label>
                        <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label><b>Customer Email</b></label>
                        <input type="text" name="email" value="<?php echo $row['email']; ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label><b>Customer City</b></label>
                        <input type="text" name="city" value="<?php echo $row['city']; ?>" class="form-control">
                    </div>

                    <button class="btn btn-primary" type="submit" name="update">Update</button>
                </form>

                <?php
                
                if(isset($_POST['update'])){
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $city = $_POST['city'];

                    $query = "UPDATE customers 
                              SET name='$name', email='$email', city='$city' WHERE id='$id'";

                    $result = mysqli_query($conn, $query);

                    if($result){
                        echo "<script>alert('Updated Successfully'); window.location='view.php';</script>";
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