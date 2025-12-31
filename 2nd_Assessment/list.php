<?php
include("database/connection.php");

$where = "WHERE 1";

if(!empty($_GET['keyword'])){
    $k = $_GET['keyword'];
    $where .= " AND (name LIKE '%$k%' OR category LIKE '%$k%')";
}

if(!empty($_GET['category'])){
    $where .= " AND category='".$_GET['category']."'";
}

if(!empty($_GET['start']) && !empty($_GET['end'])){
    $where .= " AND created_at BETWEEN '".$_GET['start']."' AND '".$_GET['end']."'";
}

$order = "ORDER BY created_at DESC";
if(!empty($_GET['sort'])){
    if($_GET['sort']=="date_asc") $order = "ORDER BY created_at ASC";
    elseif($_GET['sort']=="date_desc") $order = "ORDER BY created_at DESC";
    elseif($_GET['sort']=="price") $order = "ORDER BY price";
    elseif($_GET['sort']=="name") $order = "ORDER BY name";
}

$query = "SELECT * FROM products $where $order";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Product List</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h3 class="mb-3">Product List</h3>
   <a href="ques1.php"> <h3 class="mb-3">Add Product</h3></a>
    

    <form method="GET" class="row mb-4">
        <div class="col-md-3">
            <input type="text" name="keyword" class="form-control" placeholder="Search keyword" value="<?php echo $_GET['keyword'] ?? ''; ?>">
        </div>
        <div class="col-md-2">
            <input type="date" name="start" class="form-control" value="<?php echo $_GET['start'] ?? ''; ?>">
        </div>
        <div class="col-md-2">
            <input type="date" name="end" class="form-control" value="<?php echo $_GET['end'] ?? ''; ?>">
        </div>
        <div class="col-md-2">
            <select name="sort" class="form-control">
                <option value="">Sort By</option>
                <option value="date_asc" <?php if(($_GET['sort']??'')=='date_asc') echo 'selected'; ?>>Date ASC</option>
                <option value="date_desc" <?php if(($_GET['sort']??'')=='date_desc') echo 'selected'; ?>>Date DESC</option>
                <option value="price" <?php if(($_GET['sort']??'')=='price') echo 'selected'; ?>>Price</option>
                <option value="name" <?php if(($_GET['sort']??'')=='name') echo 'selected'; ?>>Name</option>
            </select>
        </div>
        <div class="col-md-1">
            <button class="btn btn-primary btn-block">Go</button>
        </div>
    </form>

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Category</th>
                <th>Stock</th>
                <th>Price</th>
                <th>Color</th>
                <th>Size</th>
                <th>Created Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
        if($result && mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
        ?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['category'];?></td>
                <td><?php echo $row['stock'];?></td>
                <td>₹<?php echo $row['price'];?></td>
                <td><?php echo $row['color'];?></td>
                <td><?php echo $row['size'];?></td>
                <td><?php echo $row['created_at'];?></td>
                <td>
    <a href="update_product.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-primary">Update</a>
         </td>
            </tr>
        <?php
            }
        } else {
            echo "<tr><td colspan='6' class='text-center'>No products found</td></tr>";
        }
        ?>
        </tbody>
    </table>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>
