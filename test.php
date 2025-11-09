<?php
//$x=echo "hi";
$x=print "hi";

?>

<?php
$x = "10";    // string
$y = 5;       // integer
$z = $x + $y; // PHP automatically converts "10" to integer
echo $z;      // Output: 15
?>

<?php
echo "<hr>";
$num=[1,2,4,5,6,7,8,21,13,35,21,221];
$rev=array_reverse($num);
echo "<pre>";
print_r ($rev);
echo "<hr>";
?>
<?php
$a=["nilu","ritwik","ritu"];
$b=["suman","soma"];
$merge=array_merge($a,$b);
echo "<pre>";
print_r($merge);
echo "<hr>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post">
    <input type="text" name="name" placeholder="Enter your name">
    <input type="email" name="email" placeholder="enter email">
    <button type="submit" name="ok">Submit</button>
    
</form>
<?php

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    if (!empty($_POST['name']) && !empty($_POST['email'])) {
        echo $_POST['name']."<br>".$_POST['email'];
    }else {
        echo "Fill the details";
    }
}
?>

</body>
</html>
