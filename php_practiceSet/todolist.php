<?php
session_start();

// Initialize session array
if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

// Add / Delete / Clear logic
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Add task
    if (isset($_POST['add']) && !empty($_POST['task'])) {
        $task = trim($_POST['task']);
        $_SESSION['tasks'][] = $task;
    }

    // Delete specific task
    if (isset($_POST['delete'])) {
        $index = $_POST['delete'];
        unset($_SESSION['tasks'][$index]);
        $_SESSION['tasks'] = array_values($_SESSION['tasks']); // reindex array
    }

    // Clear all tasks
    if (isset($_POST['clear'])) {
        $_SESSION['tasks'] = [];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple To-Do List</title>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-primary text-white text-center">
            <h3>📝 Simple To-Do List</h3>
        </div>
        <div class="card-body">

            <!-- Add task form -->
            <form method="post" class="d-flex mb-3">
                <input type="text" name="task" class="form-control me-2" placeholder="Enter a task" required>
                <button type="submit" name="add" class="btn btn-success me-2">Add</button>
                <button type="submit" name="clear" class="btn btn-danger">Clear All</button>
            </form>

            <!-- Task list -->
            <h5 class="mb-3">Your Tasks:</h5>
            <ul class="list-group">
                <?php
                if (!empty($_SESSION['tasks'])) {
                    foreach ($_SESSION['tasks'] as $index => $task) {
                        echo "
                        <li class='list-group-item d-flex justify-content-between align-items-center'>
                            " . htmlspecialchars($task) . "
                            <form method='post' style='margin:0;'>
                                <button type='submit' name='delete' value='$index' class='btn btn-sm btn-outline-danger'>Delete</button>
                            </form>
                        </li>";
                    }
                } else {
                    echo "<li class='list-group-item text-muted text-center'>No tasks added yet.</li>";
                }
                ?>
            </ul>
        </div>
    </div>
</div>
</body>
</html>
