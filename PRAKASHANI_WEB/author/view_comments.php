<?php
session_start();
include("database/connection.php");

if (!isset($_SESSION['author_id'])) {
    header("Location: login.php");
    exit();
}

$author_id = $_SESSION['author_id'];

$query = "SELECT
    comments.comment,
    comments.created_at,
    users.name AS user_name,
    books.title AS book_title
FROM comments
JOIN users ON users.id = comments.user_id
JOIN books ON books.id = comments.book_id
WHERE books.author_id = '$author_id'
ORDER BY comments.id DESC";

$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Book Comments</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5" style="max-width:800px">

    <h4 class="mb-4">💬 User Comments on Your Books</h4>

    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
            <div class="card mb-3 shadow-sm">
                <div class="card-body">
                    <h6 class="mb-1">📘 <?php echo $row['book_title']; ?></h6>
                    <small class="text-muted">
                        👤 <?php echo $row['user_name']; ?> |
                        <?= date('d M Y', strtotime($row['created_at'])); ?>
                    </small>
                    <p class="mt-2 mb-0"><?php echo $row['comment']; ?></p>
                </div>
            </div>
    <?php
        }
    } else {
    ?>
        <div class="alert alert-info text-center">No comments yet.</div>
    <?php } ?>

    <a href="index.php" class="btn btn-secondary mt-3">
        ⬅ Back to Dashboard
    </a>

</div>

</body>
</html>
