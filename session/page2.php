

<?php
session_start();

echo "Name: " . $_SESSION["name"] . "<br>";
echo "Age: " . $_SESSION["age"];

echo "<br><a href='page3.php'>Destroy Session</a>";


?>
