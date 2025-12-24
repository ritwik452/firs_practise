<?php include("connection.php"); ?>
<!DOCTYPE html>
<html>
<head>
<title>Students</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <h2>Students List</h2>
    <a href="studentadd.php" class="btn btn-primary mb-3">Add Student</a>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Action</th>
        </tr>

        <?php
        $res = mysqli_query($conn, "SELECT * FROM student");
        while($row = mysqli_fetch_assoc($res)){
            ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['name']; ?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-info btn-sm">Edit</a>
                    <a href="delete.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
</body>
</html>
