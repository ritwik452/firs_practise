<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location:login.php");
    exit();
}
?>
<?php include("../navbar/header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #eef2f3;
            font-family: 'Poppins', sans-serif;
        }

        .section-title {
            font-weight: 700;
            margin-bottom: 20px;
            color: #2c3e50;
            border-left: 5px solid #1abc9c;
            padding-left: 10px;
            font-size: 26px;
        }

        .book-card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            background: #fff;
            transition: 0.3s;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .book-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 18px rgba(0,0,0,0.15);
        }

        .book-img {
            height: 190px;
            object-fit: cover;
            width: 100%;
        }

        .book-content {
            padding: 15px;
        }

        .book-content h5 {
            font-weight: 600;
            margin-bottom: 8px;
            color: #34495e;
        }

        .book-content p {
            font-size: 14px;
            color: #7f8c8d;
        }

        .btn-sm {
            padding: 6px 14px;
            border-radius: 20px;
        }
    </style>
</head>
<body>

<div class="container py-4">

    <h3 class="section-title">📚 Available Books</h3>

    <div class="row g-4">

        <!-- Book Card Example (Duplicate for dynamic loop) -->
        <div class="col-md-4">
            <div class="book-card">
                <img src="https://via.placeholder.com/300x200" class="book-img" alt="Book">
                <div class="book-content">
                    <h5>Sample Book Title</h5>
                    <p>Short description of the book goes here...</p>
                    <div class="d-flex gap-2">
                        <a href="read_book.php" class="btn btn-primary btn-sm">Read</a>
                        <a href="download.php" class="btn btn-success btn-sm">Download</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Duplicate Book Cards -->
        <div class="col-md-4">
            <div class="book-card">
                <img src="https://via.placeholder.com/300x200" class="book-img" alt="Book">
                <div class="book-content">
                    <h5>Another Book</h5>
                    <p>Short description of the book goes here...</p>
                    <div class="d-flex gap-2">
                        <a href="#" class="btn btn-primary btn-sm">Read</a>
                        <a href="#" class="btn btn-success btn-sm">Download</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="book-card">
                <img src="https://via.placeholder.com/300x200" class="book-img" alt="Book">
                <div class="book-content">
                    <h5>Third Book Title</h5>
                    <p>Short description of the book goes here...</p>
                    <div class="d-flex gap-2">
                        <a href="#" class="btn btn-primary btn-sm">Read</a>
                        <a href="#" class="btn btn-success btn-sm">Download</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</body>
</html>
<?php include("../navbar/footer.php"); ?>
