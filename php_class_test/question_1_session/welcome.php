<?php
session_start();
if (isset($_SESSION['name'])) {
    echo "welcome " .$_SESSION['name'];
}
?>