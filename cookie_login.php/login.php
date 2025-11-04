<?php
$user="ritwik";
$pass="123";
if (isset($_POST['ok'])) {
    $name=$_POST['name'];
    $pwd=$_POST['pwd'];
    if ($name==$user && $pwd==$pass) {
        setcookie("user",$name,time()+45,"/");
        header("Location:welcome.php");
        exit();
    }else {
        echo "invailed user name and password";
    }
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
<title>Loging</title>
</head>
<body>
    <div class="container mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h1>Loging</h1>
                </div>
                <div class="card-body">
                    <form action="" method="post">

                        <div class="form-group mb-3">
                            <label for="">Enter User Name</label>
                            <input type="name" name="name" class="form-control" placeholder="Enter User Name" required>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="">Enter Password</label>
                            <input type="password" name="pwd" class="form-control" placeholder="Enter Password" required>
                        </div>
                        
                        <button tpye="submit" name="ok" class="btn btn-success">Login</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>