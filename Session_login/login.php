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
<title>Title</title>
</head>
<body>
    <div class="container mt-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3>User Login</h3>
            </div>

            <div class="card-body">
                <form action="" method="post">

        <div class="form-group mb-3">
            <label>Enter User Name:</label>
            <input type="text" name="name" class="form-control" placeholder="Enter User name" required>
          </div>

          <div class="form-group mb-3">
            <label>Enter Password:</label>
            <input type="password" name="pwd" class="form-control" placeholder="Enter password" required>
          </div>

          <button type="submit" class="btn btn-success" name="ok">Login</button>
         </form>

                            <?php
                            session_start();
                            $auser="ritwik";
                            $apassword="1234";
                            if (isset($_POST['ok'])) {
                                $name=$_POST['name'];
                                $pwd=$_POST['pwd'];
                                if ($name==$auser && $pwd==$apassword) {
                                    $_SESSION['name']=$name;
                                    header("location: dashboard.php");
                                }else {
                                    echo "invailed user ";
                                }
                            }

                            ?>
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>