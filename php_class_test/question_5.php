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
<title></title>
</head>
<body>
<?php
$students = [
    ["name" => "John", "age" => 18, "marks" => 85],
    ["name" => "Alice", "age" => 19, "marks" => 90],
    ["name" => "Bob", "age" => 17, "marks" => 78]
];

foreach($students as$student){
    echo "name--".$student['name']." ", "age--".$student['age']." ", "marks--".$student['marks']."</br>";

}

echo "<hr>";

$total=0;
foreach($students as $student){
    $total=$total+$student['marks'];

}
echo "total marks =".$total;


echo "<hr>";
?>


<div class="container">
    <div class="col-md-4" >
<table class="table table-bordered">
    <thead>
    <tr>
        <th><h3>Name</h3></th>
        <th><h3>Age</h3></th>
        <th><h3>Marks</h3></th>
    </tr>
    </thead>
    <tbody>
    <?php
     foreach($students as $student){
        ?>
            <tr>
                <td><?php echo $student["name"]?></td>
                <td><?php echo $student["age"]?></td>
                <td><?php echo $student["marks"]?></td>
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

