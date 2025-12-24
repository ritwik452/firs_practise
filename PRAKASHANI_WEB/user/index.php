<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include("database/connection.php");

$query = "SELECT 
    books.id,
    books.title,
    books.price,
    books.book_file,
    books.cover_image,
    users.name AS author_name,
    categories.category_name
    FROM books
INNER JOIN users ON users.id = books.author_id
INNER JOIN categories ON categories.id = books.category_id
";

$result = mysqli_query($conn, $query);
?>

<?php include("navbar/header.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>User Dashboard | Prokashani</title>

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
    margin-bottom: 5px;
    color: #34495e;
}
.book-content p {
    font-size: 14px;
    color: #7f8c8d;
    margin-bottom: 6px;
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

<?php if(mysqli_num_rows($result) > 0): ?>
<?php while($book = mysqli_fetch_assoc($result)): ?>

<div class="col-md-4">
    <div class="book-card">

        <!-- Book Image -->
        <?php if(!empty($book['cover_image'])): ?>
            <img src="<?php echo htmlspecialchars($book['cover_image']); ?>" class="book-img" alt="Book">
        <?php else: ?>
            <img src="assets/no-book.png" class="book-img" alt="Book">
        <?php endif; ?>

        <div class="book-content">
            <h5><?php echo htmlspecialchars($book['title']); ?></h5>

            <p>✍ Author: <b><?php echo $book['author_name']; ?></b></p>
            <p>📂 Category: <?php echo $book['category_name']; ?></p>
            <p class="text-success fw-bold">₹<?php echo $book['price']; ?></p>

            <div class="d-flex gap-2 mt-2">
                <a href="read.php?book_id=<?php echo $book['id']; ?>"
                   class="btn btn-primary btn-sm">
                   Read
                </a>

                <a href="download.php?file=<?php echo urlencode($book['book_file']); ?>" 
                   class="btn btn-success btn-sm">
                   Download
                </a>
                <a href="comments.php?book_id=<?php echo $book['id']; ?>" 
                    class="btn btn-info btn-sm">
                    Comments
                </a>
                
                
            </div>
        </div>

    </div>
</div>

<?php endwhile; ?>
<?php else: ?>
<div class="col-12">
    <div class="alert alert-info text-center">
        No books available right now.
    </div>
</div>
<?php endif; ?>

</div>
</div>

</body>
</html>

<?php include("navbar/footer.php"); ?>
