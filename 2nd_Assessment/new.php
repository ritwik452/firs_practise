<?php

session_start();

if (!isset($_SESSION['name'])) {
    $_SESSION['name'] = "Ritwik Mandal";
}

echo "Welcome, " . $_SESSION['name'];
?>

