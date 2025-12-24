<?php
session_start();
include('database/connection.php');

if(!isset($_SESSION['author_id'])){
    header("Location: login.php");
    exit();
}

$author_id = $_SESSION['author_id'];



$query="SELECT * FROM categories";
$result = mysqli_query($conn, $query);

if(isset($_POST['add_book'])){
    $title = $_POST['title'];
    $price = $_POST['price'];
    $category_id = $_POST['category_id'];

$pdf_name = $_FILES['book_file']['name'];
$pdf_tmp  = $_FILES['book_file']['tmp_name'];
$pdf_path = "../uploads/pdf/".$pdf_name;

move_uploaded_file($pdf_tmp, $pdf_path);



$img_name = $_FILES['cover_image']['name'];
$img_tmp  = $_FILES['cover_image']['tmp_name'];
$img_path = "../uploads/cover/".$img_name;

move_uploaded_file($img_tmp, $img_path);

    $query = "INSERT INTO books (author_id, category_id, title, price, book_file,cover_image)
            VALUES ('$author_id','$category_id','$title','$price','$pdf_path','$img_path')";
    $result=mysqli_query($conn,$query);

    if($result){
        $success = "Book added successfully!";
        header("Location:index.php");
    }else{
        $error = "Something went wrong!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Book | Author</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background:#eef2f3;
    font-family:'Poppins',sans-serif;
}
.card{
    border:none;
    border-radius:12px;
    box-shadow:0 4px 12px rgba(0,0,0,0.1);
}
</style>
</head>
<body>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card p-4">
                <h3 class="text-center mb-4">📘 Add New Book</h3>

                <?php if(isset($success)){ ?>
                    <div class="alert alert-success"><?php echo $success; ?></div>
                <?php } ?>

                <?php if(isset($error)){ ?>
                    <div class="alert alert-danger"><?php echo $error; ?></div>
                <?php } ?>

                <form method="POST" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label>Book Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Category</label>
                        <select name="category_id" class="form-control" required>
                            <option value="">-- Select Category --</option>
                            <?php while($row= mysqli_fetch_assoc($result)){ ?>
                                <option value="<?php echo $row['id']; ?>">
                                    <?php echo $row['category_name']; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>Price (₹)</label>
                        <input type="number" name="price" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Book File (PDF)</label>
                        <input type="file" name="book_file" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Cover Image</label>
                        <input type="file" name="cover_image" class="form-control" required>
                    </div>


                    <button type="submit" name="add_book" class="btn btn-success w-100">
                        ➕ Add Book
                    </button>

                </form>

                <a href="index.php" class="btn btn-secondary mt-3 w-100">⬅ Back to Dashboard</a>
            </div>

        </div>
    </div>
</div>

</body>
</html>
