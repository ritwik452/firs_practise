<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f4f6f9;
        }
        .sidebar {
            height: 100vh;
            background: #2c3e50;
            padding-top: 30px;
            color: #fff;
        }
        .sidebar a {
            color: #fff;
            display: block;
            padding: 12px 18px;
            text-decoration: none;
            margin-bottom: 8px;
            border-radius: 6px;
        }
        .sidebar a:hover {
            background: #1abc9c;
        }
        .card {
            border: none;
            box-shadow: 0px 3px 10px rgba(0,0,0,0.1);
        }
        .book-img {
            height: 140px;
            width: 100%;
            object-fit: cover;
            border-radius: 6px;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        <div class="col-md-3 sidebar">
            <h3 class="text-center mb-4">Author Panel</h3>
            <a href="#">📊 Dashboard</a>
            <a href="#">📘 Upload Book</a>
            <a href="#">📚 My Books</a>
            <a href="#">💬 Reader Comments</a>
            <a href="#">⚙️ Settings</a>
            <a href="#" class="text-danger">🚪 Logout</a>
        </div>

        <!-- Main Content -->
        <div class="col-md-9 p-4">

            <h2 class="mb-4">Welcome, Author</h2>

            <!-- Stats Section -->
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="card p-3 text-center">
                        <h3>05</h3>
                        <p class="text-muted">Total Books</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3 text-center">
                        <h3>03</h3>
                        <p class="text-muted">Approved Books</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3 text-center">
                        <h3>15</h3>
                        <p class="text-muted">Total Comments</p>
                    </div>
                </div>
            </div>

            <!-- Book Section -->
            <h4 class="mb-3">Your Books</h4>
            <div class="row g-4">

                <!-- Book Card -->
                <div class="col-md-4">
                    <div class="card p-3">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUmGIQ2nF6Ry6FeZ_cFhACLDGMM12RoUH7nA&usqp=CAU" class="book-img mb-3">
                        <h5>Book Title</h5>
                        <span class="badge bg-success mb-2">Approved</span>
                        <a href="#" class="btn btn-primary btn-sm">View</a>
                        <a href="#" class="btn btn-warning btn-sm">Edit</a>
                    </div>
                </div>

                <!-- Book Card -->
                <div class="col-md-4">
                    <div class="card p-3">
                        <img src="https://i.pinimg.com/originals/85/00/cc/8500ccf68cf8127781d78b810e16f3fa.jpg" class="book-img mb-3">
                        <h5>Another Book</h5>
                        <span class="badge bg-secondary mb-2">Pending</span>
                        <a href="#" class="btn btn-primary btn-sm">View</a>
                        <a href="#" class="btn btn-warning btn-sm">Edit</a>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

</body>
</html>