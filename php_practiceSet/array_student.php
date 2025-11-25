<?php
$employees = [
    [
        "name" => "alice",
        "position" => "Manager",
        "salary" => 50000
    ],
    [
        "name" => "bob",
        "position" => "Developer",
        "salary" => 45000
    ],
    [
        "name" => "chairle",
        "position" => "Designer",
        "salary" => 35000
    ],
    [
        "name" => "dean",
        "position" => "Hr",
        "salary" => 42000
    ],
    
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
</head>
<body>

<table class="table">
<tr>
    <th>name</th>
    <th>position</th>
    <th>salary</th>
</tr>

<?php
foreach ($employees as $employee) {
    echo "<tr>";
    echo "<td>" . $employee['name'] . "</td>";
    echo "<td>" . $employee['position'] . "</td>";
    echo "<td>" . $employee['salary'] . "</td>";
    echo "</tr>";
}

?>

</table>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>