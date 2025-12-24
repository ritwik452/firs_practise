<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

include("database/connection.php");


$query="SELECT COUNT(*) AS total FROM users WHERE role='user'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);

$query="SELECT COUNT(*) AS total FROM users WHERE role='author'";
$result = mysqli_query($conn, $query);
$author = mysqli_fetch_assoc($result);

$query="SELECT COUNT(*) AS total FROM books";
$result= mysqli_query($conn, $query);
$book = mysqli_fetch_assoc($result);

$query="SELECT COUNT(*) AS total FROM downloads";
$result = mysqli_query($conn, $query);
$download = mysqli_fetch_assoc($result);

$query="SELECT COUNT(*) AS total FROM comments";
$result = mysqli_query($conn, $query);
$comment = mysqli_fetch_assoc($result);
?>

<?php include("navbar/header.php"); ?>
<?php include("navbar/top_navbar.php"); ?>
<?php include("navbar/side_navbar.php"); ?>

<div class="content-wrapper">

    <!-- Page Header -->
    <section class="content-header">
        <div class="container-fluid">
            <h1 class="mb-3">📊 Admin Dashboard</h1>
        </div>
      
    </section>

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <!-- USERS -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3><?php echo $user['total']; ?></h3>
                            <p>Total Users</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <a href="view_users.php" class="small-box-footer">
                            View Users <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <!-- AUTHORS -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?php echo $author['total']; ?></h3>
                            <p>Total Authors</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-pen-nib"></i>
                        </div>
                        <a href="view_authors.php" class="small-box-footer">
                            View Authors <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <!-- BOOKS -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?php echo $book['total']; ?></h3>
                            <p>Total Books</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <a href="books/view_books.php" class="small-box-footer">
                            View Books <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <!-- DOWNLOADS -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?php echo $download['total']; ?></h3>
                            <p>Total Downloads</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-download"></i>
                        </div>
                        <a href="downloads/view_downloads.php" class="small-box-footer">
                            View Downloads <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <!-- COMMENTS -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?php echo $comment['total']; ?></h3>
                            <p>Total Comments</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-comments"></i>
                        </div>
                        <a href="view_comments.php" class="small-box-footer">
                            View Comments <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>

<?php include("navbar/footer.php"); ?>
<?php include("navbar/script.php"); ?>
