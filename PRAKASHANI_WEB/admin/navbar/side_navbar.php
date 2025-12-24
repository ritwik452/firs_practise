<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index.php" class="brand-link d-flex align-items-center">
    <img src="assets/dist/img/AdminLTELogo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light ms-2">Admin Panel</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar d-flex flex-column" style="height:100vh;">
    <!-- Sidebar user panel -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
      <div class="image">
        <img src="assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="index.php" class="d-block fw-semibold text-white">Ritwik Mandal</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2 flex-grow-1">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <!-- Dashboard Menu -->
        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
           <li class="nav-item">
              <a href="register.php" class="nav-link">
                <i class="nav-icon fas fa-user-edit"></i>
                <p>Create Authors</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="regist.php" class="nav-link">
                <i class="nav-icon fas fa-users-cog"></i>
                <p>Create Users</p>
              </a>
            </li>

              <li class="nav-item has-treeview">
                <a href="#" class="nav-link books-category">
                  <i class="nav-icon fas fa-layer-group"></i>

                  <p>
                    Books Category
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="add_book_category.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Add Category</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="view_book_category.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>View Categories</p>
                    </a>
                  </li>
                </ul>
              </li>


        <!-- Books -->
        <li class="nav-item">
          <a href="books.php" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>Books</p>
          </a>
        </li>

        <!-- Comments -->
        <li class="nav-item">
          <a href="comments.php" class="nav-link">
            <i class="nav-icon fas fa-comments"></i>
            <p>Comments</p>
          </a>
        </li>

      </ul>
    </nav>

    <!-- Logout at Bottom -->
    <ul class="nav nav-pills nav-sidebar flex-column mt-auto mb-3">
      <li class="nav-item">
        <a href="logout.php" class="nav-link text-white" style="background-color:#dc3545; border-radius:8px;">
          <i class="nav-icon fas fa-right-from-bracket"></i>
          <p>Logout</p>
        </a>
      </li>
    </ul>

  </div>
  <!-- /.sidebar -->
</aside>

  <style>
  .nav-sidebar .nav-link {
    border-radius: 8px;
    margin: 2px 0;
    transition: 0.3s;
  }

  /* Hover for all links */
  .nav-sidebar .nav-link:hover {
    background-color: #1e3a8a; /* Deep blue hover */
    color: #fff;
  }

  /* Active link color */
  .nav-sidebar .nav-link.active {
    background-color: #2563eb; /* Primary active color */
    color: #fff;
  }

  /* Books Category menu special color */
  .nav-item.has-treeview > .nav-link.books-category {
    background-color: #4caf50; /* Green color */
    color: #fff;
  }
  .nav-item.has-treeview > .nav-link.books-category:hover {
    background-color: #45a049; /* Darker green on hover */
    color: #fff;
  }

  /* Submenu items for Books Category */
  .nav-item.has-treeview > ul.nav-treeview > .nav-item > .nav-link {
    background-color: #d4edda; /* Light green background for submenu */
    color: #155724;
  }
  .nav-item.has-treeview > ul.nav-treeview > .nav-item > .nav-link:hover {
    background-color: #c3e6cb; /* Slightly darker green on hover */
    color: #0b2e13;
  }

  .brand-link .brand-text {
    font-size: 1.1rem;
    font-weight: 500;
  }

  .nav-sidebar .nav-link i {
    min-width: 20px;
  }

  .nav-sidebar ul.mt-auto .nav-link:hover {
    background-color: #c82333; /* red hover for logout */
  }
</style>

