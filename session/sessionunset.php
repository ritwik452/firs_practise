
<?php
session_start();

$_SESSION["user"] = "raju";

//session_unset();
session_destroy();
echo "Session variables are unset.";


//var_dump($_SESSION);
echo "</pre>";



?>
