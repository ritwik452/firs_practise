<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
  <a class="navbar-brand font-weight-bold" href="#">MyWebsite</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">

      <?php if(isset($_SESSION['username'])) { ?>
        <li class="nav-item mr-3">
          <span class="nav-link font-weight-bold text-success">
            Welcome, <?php echo $_SESSION['username']; ?>
          </span>
        </li>
      <?php } ?>

      <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
      <li class="nav-item"><a class="nav-link" href="#">About</a></li>
      <li class="nav-item"><a class="nav-link" href="view1.php">All Data</a></li>

      <?php if(isset($_SESSION['username'])) { ?>
        <li class="nav-item">
          <a class="nav-link btn btn-primary text-white px-3 ml-2" href="logout.php">Logout</a>
        </li>
      <?php } ?>
      
    </ul>
  </div>
</nav>
