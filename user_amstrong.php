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

<h1>Amstrong Number</h1>
<div class="container">
    <div class="col-md-12">
        <form action="" method="post">
            <div class="form-group">
                <label for="">Enter Number:</label>
                <input type="number" name="number">
            </div>
            <button type="submit" class="btn btn-primary" name="ok">Click Me</button>
        </form>
<?php
if (isset($_POST['ok'])) {
    $number=$_POST['number'];
    if (!empty($number=$_POST['number'])) {
       
    $sum=0;
    $temp=$number;
    while ($temp!=0) {
        $rem=$temp%10;
        $sum=$sum+($rem*$rem*$rem);
        $temp=(int)($temp/10);
    }
    if ($sum==$number) {
        echo "This is Amstrong number";
    }else {
        echo "Not Amstrong number";
    }

    }else {
        echo "Please Enter number at First";
    }

   
}

?>

    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>