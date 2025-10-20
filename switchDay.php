<?php
$day=5;
switch($day){
case 1:
    echo "Monday";
    break;

case 2:
    echo "Tuesday";
    break;
case 3:
    echo "Wednesday";
    break;
case 4:
    echo "Thrusday";
    break;
case 5:
    echo "Friday";
    break;
case 6:
    echo "Saturday";
    break;
case 7:
    echo "Sunday";
    break;
default:
    echo "invailed day";


};
echo "<hr>";
?>



<?php
$months=10;

switch ($months) {
    case 1:
        echo "january has 31 days";
        break;
    case 2:
        echo "feruary has 28 or 29 days";
        break;
    case 3:
        echo "march has 31 days";
        break;
    case 4:
        echo "April has 30 days";
        break;
    case 5:
        echo "May has 31 days";
        break;
    case 6:
        echo "june has 30 days";
        break;
    case 7:
        echo "july has 31 days";
        break;
    case 8:
        echo "August has 31 days";
        break;
    case 9:
        echo "September has 30 days";
        break;
    case 10:
        echo "october has 31 days";
        break;
    case 11:
        echo "november has 30 days";
        break;
    case 12:
        echo "December has 31 days";
        break;

    default:
        echo "invailed month";
    
};

echo "<hr>";

?>


<?php
$ch="b";

switch ($ch) {
    case "a":
    case "e":
    case "i":
    case "o":
    case "u":
    case "A":
    case "E":
    case "I":
    case "O":
    case "U":
        echo $ch." is  vowel";
        break;
    
    default:
        echo $ch ." is consonent";
};
echo "<hr>";


?>



<?php
$a=20;
$b=10;
$choice="/";

switch($choice){
  case '+':
    echo "the additon is ".($a+$b);
    break;

case '-':
    echo "the substruction is ".($a-$b);
    break;
case '*':
    echo "the multiplication is ".($a*$b);
    break;
case '%':
    echo "the modulas is ".($a%$b);
    break;
case '/':
    echo "the divition is ".($a/$b);
    break;

default:
    echo "invailed choice";

};
echo "<hr>";
?>

<?php
$mark=60;
switch ($mark) {
    case ($mark>=90 && $mark<=100):
        echo "Grade A+";
        break;
    case ($mark>=80 && $mark<=89);
        echo "Grade A";
        break;
    case ($mark>=70 && $mark<=79);
         echo "Grade B";
         break;
    case ($mark>=60 && $mark<=69);
          echo "Grade C";
          break;
    case ($mark>=40 && $mark<=59);
         echo "Grade D";
         break;
    case ($mark<=39) :
         echo "Fail";
         break;
    default:
        echo "invailed mark";
    
};
echo "<hr>";
?>

<?php

$unit=250;
$bill=0;
switch (true) {
    case ($unit<=100):
        $bill=($unit*3);
        break;
    case ($unit<=200):
        $bill=(100*3)+(($unit-100)*4);
        break;
    case ($unit >200):
        $bill=(100*3)+(100*4)+(($unit-200)*5);
        break;  
    default:
        echo "invailed bill";
        break;
};
echo "total bill is ". $bill;
 echo "<hr>";

?>

<?php

$day=6;
 switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "weekday";
        break;
    case 6:
    case 7:
        echo "weekend";
        break;
    default:
        echo "invailed day";
        
 };
echo "<hr>";

?>


<?php
$month="jun";
switch ($month) {
    case 'dec':
    case 'jan':
    case 'feb':
        echo "winter";
        break;
    case 'mar':
    case 'april':
    case 'may':
        echo "Summer";
        break;
    case 'jun':
    case 'july':
    case 'august':
    case 'sept':
        echo "Rainy";
        break;
    case 'oct':
    case 'nov':
        echo "Autumn";
        break;
    default:
        echo "invailde Month";
        
};
echo "<hr>";

?>

<?php

$browser="Firefox";
switch($browser){
    case 'chrome':
        echo "You are using chrome";
        break;
    case 'Firefox':
        echo "You are using firefox";
        break;
    case 'edge':
        echo "you are using edge";
        break;
    case 'safari':
        echo "you are using safari";
        break;
    default:
    echo "invailed browser";
};
?>