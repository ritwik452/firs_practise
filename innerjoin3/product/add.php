<?php
include("../database/connection.php");
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
<title>Product Page</title>
</head>
<?php include("../navbar/header.php"); ?>
<body>

<div class="container mt-4">
    <div class="col-md-6">
        <div class="cardshadow">
           <div class="card">
               <div class="card-header bg-primary text-white text-center">
                <h4>Product Add</h4>
               </div>
               <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for=""><b>Product Name</b></label>
                        <input type="text" name="p_name" class="form-control" placeholder="enter product name">
                    </div>
                    <div class="form-group">
                        <label for=""><b>Select User</b></label>
                        <select name="u_id" class="form-control">
                            <option value="">Select</option>
                            <?php
                            $query="SELECT * FROM user";
                            $result=mysqli_query($conn,$query);
                            if (mysqli_num_rows($result)>0) {
                                while($row=mysqli_fetch_assoc($result)){
                                    echo"<option value='{$row['u_id']}'> {$row['u_name']}</option> ";
                                }
                            }
                            ?>
                        </select>
                    </div>
                   <div class="form-group">
                    <label for=""><b>Select Category</b></label>
                    <select name="c_id"class="form-control">
                      <option value="">Select</option>
                      <?php
                         $query="SELECT * FROM category";
                         $result=mysqli_query($conn,$query);
                         if (mysqli_num_rows($result)>0) {
                            while($row=mysqli_fetch_assoc($result)){
                                echo "<option value='{$row['c_id']}'> {$row['c_name']} </option>";
                            }
                         }
                      ?>
                    </select>
                   </div>

                   <div class="form-group">
                    <label for=""><b>Select Brand</b></label>
                    <select name="b_id" class="form-control">
                         <option value="">Select</option>
                         <?php
                         $query="SELECT * FROM brand";
                         $result=mysqli_query($conn,$query);
                         if (mysqli_num_rows($result)>0) {
                            while($row=mysqli_fetch_assoc($result)){
                                echo "<option value='{$row['b_id']}'> {$row['b_name']} </option>";
                            }
                         }

                         ?>
                    </select>
                   </div>
                   <button type="submit" class="btn btn-success" name="add">Submit</button>

                </form>
                 <?php
                      if (isset($_POST['add'])) {
                        $p_name=$_POST['p_name'];
                        $u_id=$_POST['u_id'];
                        $c_id=$_POST['c_id'];
                        $b_id=$_POST['b_id'];
                        $query="INSERT INTO product (p_name,u_id,c_id,b_id) VALUES('$p_name','$u_id','$c_id','$b_id') ";
                        $result=mysqli_query($conn,$query);
                        if ($result) {
                           echo "<script>alert('insert successfully'); window.location='view.php';</script>";
                        }
                      }
                 ?>

               </div>
            </div>
           </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>