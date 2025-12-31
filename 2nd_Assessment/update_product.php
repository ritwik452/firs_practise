<?php
include("database/connection.php");

$product_id = (int)($_GET['id'] ?? 0);
if($product_id <= 0){
    die("Invalid product ID.");
}

$query = "SELECT * FROM products WHERE id=$product_id";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) == 0){
    die("Product not found.");
}
$product = mysqli_fetch_assoc($result);

if(isset($_POST['update_product'])){
    $stock = (int)$_POST['stock'];
    $price = (float)$_POST['price'];
    $color = $_POST['color'];
    $size = $_POST['size'];

    if($stock < 0){
        $error = "Stock must be a positive number.";
    } else {
        $query = "UPDATE products 
                  SET stock=$stock, price=$price, color='$color', size='$size' 
                  WHERE id=$product_id";
        if(mysqli_query($conn, $query)){
            $success = "Product updated successfully.";
            
            $result = mysqli_query($conn, "SELECT * FROM products WHERE id=$product_id");
            $product = mysqli_fetch_assoc($result);
        } else {
            $error = "Update failed: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
</head>
<body>
<div class="container mt-5">
    <h3>Update Product: <?php echo $product['name']; ?></h3>
    
    <?php if(!empty($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
    <?php if(!empty($success)) echo "<div class='alert alert-success'>$success</div>"; ?>

    <form method="POST">
        <div class="form-group">
            <label>Stock</label>
            <input type="number" name="stock" class="form-control" value="<?php echo $product['stock']; ?>" required>
        </div>
        <div class="form-group">
            <label>Price (₹)</label>
            <input type="number" step="0.01" name="price" class="form-control" value="<?php echo $product['price']; ?>" required>
        </div>
        <div class="form-group">
            <label>Color</label>
            <input type="text" name="color" class="form-control" value="<?php echo $product['color']; ?>">
        </div>
        <div class="form-group">
            <label>Size</label>
            <input type="text" name="size" class="form-control" value="<?php echo $product['size']; ?>">
        </div>
        
        <button type="submit" name="update_product" class="btn btn-primary">Update</button>
        <a href="list.php" class="btn btn-secondary">Back to List</a>
    </form>
</div>
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>