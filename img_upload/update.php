<?php
include("database/connection.php");

$id=$_GET['id'];
$query="SELECT * FROM imgupl WHERE id='$id' ";
$result=mysqli_query($conn,$query);
    $row=mysqli_fetch_assoc($result);

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
<title>Update Upload</title>
</head>
<body>
    <div class="container mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4>Update Upload</h4>
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                                
                       <label for="">Name</label>
                       <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control"placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                       <label for="" >Old Image</label>
                       <img src="<?php echo $row['photo']; ?>" width="80">
                        </div>

                        <div class="form-group">
                       <label for="" >New Image</label>
                       <input type="file" name="new_photo" >
                        </div>
                        <button type="submit" class="btn btn-success" name="update">Update</button>
                    </form>

                    <?php
                    
                    $message='';
                    ?> <div><script> alert("<?php echo $message; ?>")</script></div> <?php
                        if (isset($_POST['update'])) {
                            $name=$_POST['name'];

                            if (!empty($_FILES['new_photo']['name'])) {
                            $img_name=$_FILES['new_photo']['name'];
                            $tmp=$_FILES['new_photo']['tmp_name'];

                            $path="uploads/img/".$img_name;
                            move_uploaded_file($tmp,$path);

                            }else {
                                $path=$row['photo'];
                            }
                           
                            $query="UPDATE imgupl SET name='$name',photo='$path' WHERE id='$id' ";
                            $result=mysqli_query($conn,$query);
                            if ($result) {
                                $message="Update Successfully";
                                header("location: view.php");
                                exit();
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