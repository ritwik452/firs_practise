<?php   
// reverse number
$num=2345;
$rev=0;
$temp=$num;
while ($temp!=0) {
    $rem=$temp%10;
    $rev=($rev*10)+$rem;
    $temp=(int)($temp/10);
}
echo "the reverse number $num is : ". $rev;
echo "<hr>";
?>


<?php
$num=12345;
$sum=0;
$temp=$num;
while ($temp!=0) {
    $rem=$temp%10;
    $sum=$sum+$rem;
    $temp=(int)($temp/10);
}
echo "the sum of $num is = ".$sum;
echo "<hr>";
?>

<?php
$num=5;
$fact=1;
for ($i=1; $i <=$num ; $i++) { 
    $fact=$fact*$i;

}
echo "the factorial $num is = ".$fact;
echo "<hr>";
?>


<?php
$num=121;
$rev=0;
$temp=$num;
while ($temp!=0) {
    $rem=$temp%10;
    $rev=($rev*10)+$rem;
    $temp=(int)($temp/10);
}if ($rev==$num) {
    echo $rev." This is Palindrome number .";
}else {
    echo $rev. "Not palindrome number .";
}
echo "<hr>";
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
<title>Factorial</title>
</head>
<body>
<div class="container">
    <div class="col-md-3">
        <form action="" method="post">
            <label for="" class="form-label">Enter Number</label>
            <input type="number" name="num" >
            <button type="submit" name="ok" class="btn btn-primary">click me </button>
        </form>
        <?php
            if (isset($_POST["ok"])) {
                $num=$_POST["num"];
            
            $a=0;
            $b=1;
            for ($i=1; $i<=$num ; $i++) { 
                echo $a." ";
                $c=$a+$b;
                $a=$b;
                $b=$c;
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

<?php
echo "<hr>";
$num=234539858;
$largest=0;
$temp=$num;
while ($temp!=0) {
    $rem=$temp%10;
    if ($rem>$largest) {
        $largest=$rem;
    }
    $temp=(int)($temp/10);
}
echo " the lagest number is : ".$largest;
echo "<hr>";
?>

<?php

$num=234539858;
$smallest=9;
$temp=$num;
while ($temp!=0) {
    $rem=$temp%10;
    if ($rem<$smallest) {
        $smallest=$rem;
    }
    $temp=(int)($temp/10);
}
echo " the smallest number is : ".$smallest;
echo "<hr>";
?>

<?php
for ($i=1; $i <=100 ; $i++) { 
    if ($i%3==0 && $i%5==0) {
        echo $i." ";
    }
}

?>