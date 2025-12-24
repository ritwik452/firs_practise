<?php
include ("database/connection.php");

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass  = $_POST['password'];
    $query="INSERT INTO users (name,email,password,role)
            VALUES ('$name','$email','$pass','user')";
   $result= mysqli_query($conn,$query);
   if ($result) {
       echo "Registration Successful";

   }
    
}
?>


<form method="post">
    <input type="text" name="name" placeholder="Full Name" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit" name="register">Register</button>
    <button type="submit" name="login" >Login</button>
</form>
