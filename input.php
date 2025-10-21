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
<title>input</title>
</head>
<body>
<h1>User Input Prac</h1>
<div class="container">
    <div class="col-md-6">
        <form action="" method="post">
            <label for="">Name</label>
            <input type="name" name="name" placeholder="enter your name" class="form-control" >
            <br>
            <button type="submit" class="btn btn-primary" name="ok">Click Me</button>
        </form>
        <?php
          if (isset($_POST["ok"])) {
            $name=$_POST["name"];
            echo "Your Name Is ".$name;
          }

        ?>



    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>