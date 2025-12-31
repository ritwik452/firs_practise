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
<title>QUESTION 1</title>
</head>
<body>

<div class="container mt-4">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header text-center bg-primary text-white">
                <h4>Product Form</h4>
            </div>
             <div class="card-body">
                <form method="post">

                       <div class="form-group">
                        <label for="">Product Name</label>
                        <input type="text" name="name" placeholder="enter product name" class="form-control">
                       </div>
                       <div class="form-group">
                        <label for="">Category</label>
                        <input type="text" name="category" placeholder="enter category name" class="form-control">
                       </div>
                       <div class="form-group">
                        <label for="">Stock</label>
                        <input type="number" name="stock" placeholder="enter stock number" class="form-control">
                       </div>
                       <div class="form-group">
                        <label for="">Price</label>
                        <input type="number" name="price" placeholder="enter price" class="form-control">
                       </div>
                       <div class="form-group">
                        <label>Color</label>
                        <input type="text" name="color" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Size</label>
                        <input type="text" name="size" class="form-control">
                    </div>

                       <button type="submit" name="save" class="btn btn-success">Submit</button>
                </form>

                <?php
                include("database/connection.php");
                   if (isset($_POST['save'])) {
                    $name=$_POST['name'];
                    $category=$_POST['category'];
                    $stock=$_POST['stock'];
                    $price=$_POST['price'];
                    $color=$_POST['color'];
                    $size=$_POST['size'];
            

                    if($stock <= 0){
                        echo "Stock must be positive";
                        exit;
                    }

                    $query="INSERT INTO products(name,category,stock,price,color,size)
                            VALUES('$name','$category','$stock','$price','$color','$size')";
                    $result=mysqli_query($conn,$query);
                    if ($result) {
                        header("location:list.php");
                    }
                }

                ?>
             </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>