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
<title>Employee Details</title>
</head>
<body>
<?php
$employees=[
    [
        "name"=>"ritwik",
        "position"=>"Developer",
        "salary"=>20000,
     
    ],
    [
        "name"=>"rahul",
        "position"=>"manager",
        "salary"=>22000,
    ],
    [
        "name"=>"nila",
        "position"=>"Hr",
        "salary"=>50000,
    ],

];
?>

<div class="container">
    <div class="col-md-4" >
<table class="table table-bordered">
    <thead>
    <tr>
        <th><h3>Name</h3></th>
        <th><h3>Position</h3></th>
        <th><h3>Salary</h3></th>
    </tr>
    </thead>
    <tbody>
    <?php
     foreach($employees as $employee){
        ?>
            <tr>
                <td><?php echo $employee["name"]?></td>
                <td><?php echo $employee["position"]?></td>
                <td><?php echo $employee["salary"]?></td>
            </tr>
        <?php
     }

    ?>
    </tbody>

</table>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>