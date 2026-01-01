<?php
session_start();
$user="Ritwik";
if (isset($_POST['ok'])) {
    $name=$_POST['name'];
    if ($name==$user) {
        $_SESSION['name']=$name;
        header("Location: welcome.php");
    }else {
        echo "Invailed User";
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
<title>Title</title>
</head>
<body>
<div class="container mt-4">
    <div class="col-md-6">
        <form action="" method="post">
            
              <div class="form-group">
                <label for="">Enter Name</label>
                <input type="text" name="name" >
                 </div>
                <button  type="submit" class="btn btn-success" name="ok">Click</button>
        </form>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>