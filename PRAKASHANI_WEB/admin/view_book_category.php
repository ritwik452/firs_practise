<?php
include('database/connection.php');

$query = "SELECT * FROM categories ORDER BY category_name ASC";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>View Categories</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
body{
    background:#f4f6f9;
}
.card{
    border-radius:12px;
}
.table thead{
    background:#2563eb;
    color:#fff;
}
.table tbody tr:hover{
    background:#eef2ff;
}
.badge-custom{
    background:#4caf50;
}
.action-btn i{
    font-size:16px;
}
.action-btn .edit{
    color:#0d6efd;
}
.action-btn .delete{
    color:#dc3545;
}
.action-btn a{
    margin:0 8px;
}
</style>
</head>
<body>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-12">

      <!-- CARD START -->
      <div class="card shadow">

        <!-- CARD HEADER -->
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
          <h4 class="mb-0">📚 Books Categories</h4>

          <div class="d-flex gap-2">
            <a href="add_book_category.php" class="btn btn-light btn-sm">
              <i class="fas fa-plus"></i> Add Category
            </a>

            <a href="index.php" class="btn btn-outline-light btn-sm">
              <i class="fas fa-arrow-left"></i> Dashboard
            </a>
          </div>
        </div>

        <!-- CARD BODY -->
        <div class="card-body p-0">
          <table class="table table-bordered table-hover mb-0 text-center align-middle">
            <thead>
              <tr>
                <th>Category Name</th>
                <th width="150">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php if(mysqli_num_rows($result) > 0){ ?>
                <?php while($row = mysqli_fetch_assoc($result)){ ?>
                  <tr>
                    <td>
                      <span class="badge badge-custom px-3 py-2">
                        <?php echo $row['category_name']; ?>
                      </span>
                    </td>

                    <td class="action-btn">
                      <a href="edit_books_category.php?id=<?php echo $row['id']; ?>" title="Edit">
                        <i class="fas fa-pen edit"></i>
                      </a>
                      <a href="delete_books_category.php?id=<?php echo $row['id']; ?>"
                         onclick="return confirm('Are you sure?')" title="Delete">
                        <i class="fas fa-trash delete"></i>
                      </a>
                    </td>
                  </tr>
                <?php } ?>
              <?php } else { ?>
                <tr>
                  <td colspan="2">No category found</td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>

      </div>
      

    </div>
  </div>
</div>

</body>
</html>
