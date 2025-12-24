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
<title>Insert</title>
</head>
<body>

<div class="container mt-4">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-primary text-white text-center">
                <h4>FROM</h4>
            </div>
            <div class="card-body">
                <form method="post">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text"name="name" placeholder="Enter Name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text"name="email" placeholder="Enter Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="text"name="password" placeholder="Enter Password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success" name="submit">Submit</button>
                </form>
                <?php
                include("database/conn.php");
                 if (isset($_POST['submit'])) {
                    $name=$_POST['name'];
                    $email=$_POST['email'];
                    $password=$_POST['password'];
                    $query="INSERT INTO pdo_db (name,email,password) VAlUES('$name','$email','$password')";
                    if ($conn->exec($query)) {
                          header("Location:index.php");
    
                            }else{
                                echo "<script> alert('Registeration faild. Please try again')</script>";
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