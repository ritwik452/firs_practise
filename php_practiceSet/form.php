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
<title>Form</title>
</head>
<body>
 
 <div class="container mt-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3>New Form</h3>
            </div>

            <div class="card-body">
                <form action="" method="post">

        <div class="form-group mb-3">
            <label>Enter First Name:</label>
            <input type="text" name="name1" class="form-control" placeholder="Enter first name" required>
          </div>

          <div class="form-group mb-3">
            <label>Enter Second Name:</label>
            <input type="text" name="name2" class="form-control" placeholder="Enter second name" required>
          </div>

          <div class="form-group mb-3">
            <label>Enter Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Enter email ID" required>
          </div>

          <div class="form-group mb-3">
            <label>Enter Password:</label>
            <input type="password" name="pwd" class="form-control" placeholder="Enter password" required>
          </div>

          <button type="submit" class="btn btn-success" name="ok">Check Me</button>
         </form>
               <hr>

                <?php
                 if (isset($_POST['ok'])) {
                    $name1=$_POST['name1'];
                    $name2=$_POST['name2'];
                    $email=$_POST['email'];
                    $password=$_POST['pwd'];
                    echo "<b>Your First Name:</b> $name1 <br>";
                    echo "<b>Your Second Name:</b> $name2 <br>";
                    echo "<b>Your Emai ID:</b> $email <br>";
                    echo "<b>Your Password:</b> $password <br>";
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
