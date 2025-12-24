<?php
include("../database/connection.php");
$res = mysqli_query($conn, "SELECT * FROM customers");
?>
<!doctype html>
<html><head>
<title>Customers</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
</head><body>
<div class="container mt-4">
  <h2>Customers <a class="btn btn-sm btn-primary" href="create.php">Add</a> <a class="btn btn-sm btn-secondary" href="../index.php">Back</a></h2>
  <table class="table table-bordered">
    <tr><th>ID</th><th>Name</th><th>Email</th><th>City</th><th>Actions</th></tr>
    <?php while($row = mysqli_fetch_assoc($res)): ?>
    <tr>
      <td><?= $row['id'] ?></td>
      <td><?= htmlspecialchars($row['name']) ?></td>
      <td><?= htmlspecialchars($row['email']) ?></td>
      <td><?= htmlspecialchars($row['city']) ?></td>
      <td>
        <a class="btn btn-sm btn-info" href="edit.php?id=<?= $row['id'] ?>">Edit</a>
        <a class="btn btn-sm btn-danger" href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete?')">Delete</a>
      </td>
    </tr>
    <?php endwhile; ?>
  </table>
</div>
</body></html>