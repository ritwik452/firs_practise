<?php
session_start();
include('database/connection.php');

if(!isset($_SESSION['author_id'])){
    header("Location: login.php");
    exit();
}

$author_id = $_SESSION['author_id'];
$author_name = $_SESSION['author_name'];

$query = "SELECT 
    books.id,
    books.title,
    books.price,
    books.book_file,
    books.cover_image,
    categories.category_name,
    COUNT(comments.id) AS comment_count
FROM books
INNER JOIN categories ON categories.id = books.category_id
LEFT JOIN comments ON   books.id = comments.book_id
WHERE books.author_id = '$author_id'
GROUP BY books.id";

$result = mysqli_query($conn, $query);
?>
<?php

?>
<?php include('navbar/header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Author Dashboard | Prokashani</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<style>
    body {background: #eef2f3; font-family: 'Poppins', sans-serif;}
    .book-card {
        border:none; 
        border-radius:12px; 
        overflow:hidden; 
        background:#fff; 
        transition:0.3s; 
        box-shadow:0 4px 12px rgba(0,0,0,0.1);
        display:flex;
        flex-direction:column;
    }
    .book-card:hover {transform: translateY(-5px); box-shadow:0 8px 18px rgba(0,0,0,0.15);}
    .book-img {height: 220px; object-fit: cover; width: 100%;}
    .book-content {
        padding:15px;
        background: rgba(255,255,255,0.95);
        flex-grow:1;
        display:flex;
        flex-direction:column;
        justify-content:space-between;
    }
    .book-content h5 {font-weight:600; margin-bottom:8px; color:#34495e;}
    .book-content p {font-size:14px; color:#7f8c8d; margin:0;}
    .book-price {font-size:16px; font-weight:bold; color:#27ae60; margin-top:5px;}
    .btn-sm {padding:6px 14px; border-radius:20px; font-size:13px;}
    .book-buttons {margin-top:10px; display:flex; gap:8px; flex-wrap:wrap;}
</style>
</head>
<body>

<div class="container py-4">

    <a href="addbooks.php" class="btn btn-success mb-3">➕ Add New Book</a>

    <div class="row g-4">
        <?php if(mysqli_num_rows($result) > 0): ?>
            <?php while($book = mysqli_fetch_assoc($result)): ?>
               <div class="col-md-4">
                <div class="book-card">

                    <!-- Cover Image -->
                    <div class="book-img d-flex align-items-center justify-content-center bg-light">
                        <?php if(!empty($book['cover_image']) && file_exists($book['cover_image'])): ?>
                            <img src="<?php echo $book['cover_image']; ?>" alt="<?php echo $book['title']; ?>" style="width:100%; height:100%; object-fit:cover;">
                        <?php else: ?>
                            <i class="fas fa-file-pdf text-danger" style="font-size:80px;"></i>
                        <?php endif; ?>
                    </div>

                    <!-- Book Details & Buttons -->
                    <div class="book-content">
                        <div>
                            <h5><?php echo $book['title']; ?></h5>
                            <p>Category: <?php echo $book['category_name']; ?></p>
                            <p class="book-price">₹<?php echo $book['price']; ?></p>
                        </div>
                        <div class="book-buttons">
                            <a href="<?php echo htmlspecialchars($book['book_file']); ?>" target="_blank" class="btn btn-warning btn-sm">📄 View PDF</a>
                            <a href="edit_book.php?book_id=<?php echo $book['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                            <a href="delete_book.php?book_id=<?php echo $book['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                            <a href="view_comments.php?book_id=<?php echo $book['id']; ?>" 
                                    class="btn btn-outline-info btn-sm">
                                    💬 Comments 
                                    <span class="badge bg-info text-dark">
                                        <?php echo $book['comment_count']; ?>
                                    </span>
                            </a>

                        </div>
                    </div>

                </div>
               </div>
            <?php endwhile; ?>
        <?php else: ?>
            <div class="col-12">
                <div class="alert alert-info">No books published yet.</div>
            </div>
        <?php endif; ?>
    </div>
</div>

</body>
</html>
<?php include('navbar/footer.php'); ?>
