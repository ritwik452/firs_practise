
<?php
include("../database/connection.php");
$c_id=$_GET['c_id'];
$query="SELECT * FROM category WHERE c_id='$c_id'";
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
<title>Update Page</title>
</head>
<?php include("../navbar/header.php"); ?>
<body>

      <div class="container mt-4">
        
        <div class="col-md-6">
            <div class="card shadow">
            <div class="card-header bg-primary text-white text-center">
                <h1>Category Update</h1>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for=""><b>category Name</b></label>
                        <input type="text" name="c_name" value="<?php echo $row['c_name']; ?>" pleaceholder="Enter Brand" class="form-control">
                    </div>
                    <button class="btn btn-success" type="submit" name="update">Update</button>
                </form>
                <?php
        
                   if (isset($_POST['update'])) {
                    $c_name=$_POST['c_name'];
                    $query="UPDATE category SET c_name='$c_name' WHERE c_id='$c_id'";
                    $result=mysqli_query($conn,$query);
                    if ($result) {
                        echo "<script> alert('data update successfully'); window.location='view.php'; </script>";
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