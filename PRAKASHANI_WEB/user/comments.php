<?php
session_start();
include("database/connection.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if (!isset($_GET['book_id'])) {
    die("Invalid Book");
}

$user_id = $_SESSION['user_id'];
$book_id = $_GET['book_id'];

if (isset($_POST['post_comment'])) {
    $comment = trim($_POST['comment']);

    if ($comment != '') {
        $sql = "INSERT INTO comments (user_id, book_id, comment)
                VALUES ('$user_id', '$book_id', '$comment')";
        mysqli_query($conn, $sql);
    }
}

$comments = mysqli_query(
    $conn,
    "SELECT comments.comment, comments.created_at, users.name 
     FROM comments
     JOIN users ON users.id = comments.user_id
     WHERE comments.book_id = '$book_id'
     ORDER BY comments.id DESC"
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Comments</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5" style="max-width:600px">

    <!-- Comment Form -->
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <h5 class="mb-3">💬 Write a Comment</h5>

           <form method="post">
                <textarea name="comment" class="form-control mb-3"
                        rows="3" placeholder="Write your comment..." required></textarea>

                <div class="d-flex gap-2">
                    <button name="post_comment" class="btn btn-primary w-50">
                        Post Comment
                    </button>

                    <a href="index.php" class="btn btn-secondary w-50">
                        Back To Dashboard
                    </a>
                </div>
            </form>

        </div>
    </div>

    <!-- Comment List -->
    <?php if (mysqli_num_rows($comments) > 0): ?>
        <?php while ($row = mysqli_fetch_assoc($comments)): ?>
            <div class="border rounded p-3 mb-2 bg-white">
                <strong><?= htmlspecialchars($row['name']); ?></strong>
                <small class="text-muted d-block">
                    <?= date('d M Y', strtotime($row['created_at'])); ?>
                </small>
                <p class="mb-0"><?= htmlspecialchars($row['comment']); ?></p>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <p class="text-muted text-center">No comments yet.</p>
    <?php endif; ?>

</div>

</body>
</html>
