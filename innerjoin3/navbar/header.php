<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Simple CRUD</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">

<style>
    body{
        background:#f2f2f2;
    }
    .navbar{
        background:#343a40 !important;
    }
    .navbar a{
        color:#fff !important;
        font-weight:500;
    }
</style>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="../product/view.php">CRUD</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">

      <li class="nav-item">
        <a class="nav-link" href="../user/view.php">Users</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="../category/view.php">Category</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="../brand/view.php">Brand</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="../product/view.php">Products</a>
      </li>

    </ul>
  </div>
</nav>

<div class="container mt-4">
