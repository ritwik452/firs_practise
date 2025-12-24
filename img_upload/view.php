<?php
session_start();
if (isset($_SESSION['msg'])) {
    echo "<script>alert('".$_SESSION['msg']."');</script>";
    unset($_SESSION['msg']);
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
<title>Image View</title>
</head>
<body>
<div class="container mt-4">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-primary">
                <h4>Table View</h4>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <h4 class="btn btn-primary text-white"><a href="index.php">ADD</a></h4>
                      <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th colspan="2">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        include("database/connection.php");
                        $query="SELECT * FROM imgupl";
                        $result=mysqli_query($conn,$query);
                        if (mysqli_num_rows($result)>0) {
                            while ($row=mysqli_fetch_assoc($result)) {
                                  ?>
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><img src="<?php echo $row['photo'] ?>" width="80"></td>
                                            <td calss="btn btn-primary"><a href="update.php?id=<?php echo $row['id'];?>" >Update</a></td>
                                        </tr>
                                  <?php
                            }
                        }
                        ?>
                      </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>