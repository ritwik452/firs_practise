<?php
include ("database/connection.php");
session_start();

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pass  = $_POST['password'];

    $query="SELECT * FROM users WHERE email='$email' AND password='$pass'";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);


        $_SESSION['user_id'] = $row['id'];
        $_SESSION['role'] = $row['role'];

        if($row['role']=='admin') header("Location: admin.php");
        else header("Location: events.php");
    } else {
        echo "Invalid Login";
    }
}
?>

<form method="post">
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit" name="login">Login</button>
</form>
