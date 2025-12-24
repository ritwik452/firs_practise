<!-- Header / Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark" style="background:#2c3e50;">
  <div class="container-fluid">

    <!-- Logo -->
    <a class="navbar-brand fw-bold" href="#">
      📚 Prokashani
    </a>

    <!-- Mobile Toggle -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu Items -->
    <div class="collapse navbar-collapse" id="navbarNav">

      <!-- Search Bar -->
      <form class="d-flex mx-auto" style="width: 50%;">
        <input class="form-control me-2" type="search" placeholder="Search books..." aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>

      <!-- Right Side Menu -->
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Books</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="profile.php"><?php echo $_SESSION['user_name']; ?></a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-danger" href="logout.php">Logout</a>
        </li>
      </ul>

    </div>
  </div>
</nav>
