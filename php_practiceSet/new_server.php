<?php
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //  $name = $_POST['name']; 
    //echo "Hello, $name!";
//}
?>

<form method="post">
    <input type="text" name="name" placeholder="Enter your name">
    <button type="submit" name="ok">Submit</button>
    
</form>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $name=$_POST['name'];
    echo $name;
}


?>
