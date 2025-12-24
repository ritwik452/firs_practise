<?php
include('database/connection.php');

$msg = "";

if(isset($_POST['submit'])){
    $category_name = $_POST['category_name'];

    $query = "INSERT INTO categories (category_name) VALUES ('$category_name')";
    $result = mysqli_query($conn, $query);

    if($result){
        $msg = "Category added successfully!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Books Category</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background:#f4f6f9;
}
.card{
    border-radius:12px;
}
.btn-custom{
    background:#4caf50;
    color:#fff;
}
.btn-custom:hover{
    background:#43a047;
}
</style>
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">

      <div class="card shadow">
        <div class="card-header bg-success text-white text-center">
          <h4>➕ Add Books Category</h4>
        </div>

        <div class="card-body">

          <?php if($msg != ""){ ?>
            <div class="alert alert-success text-center">
              <?php echo $msg; ?>
            </div>
          <?php } ?>

          <form method="POST">
            <div class="mb-3">
              <label class="form-label fw-semibold">Category Name</label>
              <input type="text" name="category_name" class="form-control" placeholder="Enter category name">
            </div>

                <div class="text-center d-flex justify-content-center gap-3">
                  <button type="submit" name="submit" class="btn btn-custom px-4">
                    <i class="fas fa-plus"></i> Add Category
                  </button>

                  <a href="index.php" class="btn btn-outline-secondary px-4">
                    <i class="fas fa-arrow-left"></i> Back to Dashboard
                  </a>
                </div>
          </form>

        </div>
      </div>

    </div>
  </div>
</div>

</body>
</html>
