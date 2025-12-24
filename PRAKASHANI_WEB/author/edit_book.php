<?php
session_start();
include('database/connection.php');

if(!isset($_SESSION['author_id'])){
    header("Location: login.php");
    exit();
}
$author_id = $_SESSION['author_id'];


if(!isset($_GET['book_id'])){
    header("Location: index.php");
    exit();
}
$book_id = $_GET['book_id'];


$book_query = "SELECT * FROM books WHERE id='$book_id' AND author_id='$author_id'";
$book_result = mysqli_query($conn, $book_query);
if(mysqli_num_rows($book_result) == 0){
    header("Location: index.php");
    exit();
}
$book = mysqli_fetch_assoc($book_result);

$cat_query = "SELECT * FROM categories";
$cat_result = mysqli_query($conn, $cat_query);

if(isset($_POST['update_book'])){
    $title = $_POST['title'];
    $price = $_POST['price'];
    $category_id = $_POST['category_id'];

    
    if(!empty($_FILES['book_file']['name'])){
        $pdf_name = $_FILES['book_file']['name'];
        $pdf_tmp  = $_FILES['book_file']['tmp_name'];
        $pdf_path = "../uploads/pdf/".$pdf_name;
        move_uploaded_file($pdf_tmp, $pdf_path);
    } else {
        $pdf_path = $book['book_file']; 
    }


    if(!empty($_FILES['cover_image']['name'])){
        $img_name = $_FILES['cover_image']['name'];
        $img_tmp  = $_FILES['cover_image']['tmp_name'];
        $img_path = "../uploads/cover/".$img_name;
        move_uploaded_file($img_tmp, $img_path);
    } else {
        $img_path = $book['cover_image']; 
    }

    $update_query = "UPDATE books SET 
                        category_id='$category_id', 
                        title='$title', 
                        price='$price', 
                        book_file='$pdf_path', 
                        cover_image='$img_path'
                     WHERE id='$book_id' AND author_id='$author_id'";
    $update_result = mysqli_query($conn, $update_query);

    if($update_result){
        $success = "Book updated successfully!";
        $book = mysqli_fetch_assoc(mysqli_query($conn, $book_query));
    } else {
        $error = "Something went wrong!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Edit Book | Author</title>
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
                <h3 class="text-center mb-4">✏️ Edit Book</h3>

                <?php if(isset($success)){ ?>
                    <div class="alert alert-success"><?php echo $success; ?></div>
                <?php } ?>

                <?php if(isset($error)){ ?>
                    <div class="alert alert-danger"><?php echo $error; ?></div>
                <?php } ?>

                <form method="POST" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label>Book Title</label>
                        <input type="text" name="title" class="form-control" value="<?php echo $book['title']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label>Category</label>
                        <select name="category_id" class="form-control" required>
                            <option value="">-- Select Category --</option>
                            <?php while($row= mysqli_fetch_assoc($cat_result)){ ?>
                                <option value="<?php echo $row['id']; ?>" <?php if($row['id']==$book['category_id']) echo 'selected'; ?>>
                                    <?php echo $row['category_name']; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>Price (₹)</label>
                        <input type="number" name="price" class="form-control" value="<?php echo $book['price']; ?>">
                    </div>

                    <div class="mb-3">
                        <label>Book File (PDF)</label>
                        <input type="file" name="book_file" class="form-control">
                        <?php if(!empty($book['book_file'])){ ?>
                            <small>Current file: <a href="<?php echo $book['book_file']; ?>" target="_blank">View PDF</a></small>
                        <?php } ?>
                    </div>

                    <div class="mb-3">
                        <label>Cover Image</label>
                        <input type="file" name="cover_image" class="form-control">
                        <?php if(!empty($book['cover_image'])){ ?>
                            <small>Current image: <br><img src="<?php echo $book['cover_image']; ?>" width="100"></small>
                        <?php } ?>
                    </div>

                    <button type="submit" name="update_book" class="btn btn-primary w-100">
                        💾 Update Book
                    </button>

                </form>

                <a href="index.php" class="btn btn-secondary mt-3 w-100">⬅ Back to Dashboard</a>
            </div>

        </div>
    </div>
</div>

</body>
</html>
