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
<title>User PAge</title>
</head>
<body>
    <div class="container mt-4">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h1>User Add Page</h1>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="">User Name</label>
                            <input type="text" name="u_name" class="form-control" Placeholder="enter user name">
                        </div>
                        <button class="btn btn-success" type="submit" name="adduser">Add User</button>
                    </form>
                    <?php
               include("database/connection.php");
               if(isset($_POST['adduser'])){
                $u_name = $_POST['u_name'];

               $query = "INSERT INTO user (u_name) VALUES ('$u_name')";
               $result=mysqli_query($conn, $query);
               if ($result) {
                echo "<script>alert('User Added!'); window.location='addcategory.php';</script>";
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