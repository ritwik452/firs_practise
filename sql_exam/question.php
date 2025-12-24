<?php
include('database/connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">List all products with user name and category name</h4>
        </div>

        <div class="card-body">
            <table class="table table-bordered table-hover text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>User Name</th>
                        <th>Category Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT 
                                products.name AS product_name, 
                                products.price, 
                                users.name AS user_name, 
                                categories.name AS category_name
                              FROM products
                              LEFT JOIN users ON users.id = products.user_id
                              LEFT JOIN categories ON categories.id = products.category_id";
                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?php echo $row['product_name']; ?></td>
                                <td>₹<?php echo $row['price']; ?></td>
                                <td><?php echo $row['user_name']; ?></td>
                                <td><?php echo $row['category_name']; ?></td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo '<tr><td colspan="4">No products found</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<hr>

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Show total number of products added by each user</h4>
        </div>

        <div class="card-body">
            <table class="table table-bordered table-hover text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>User Name</th>
                        <th>Total Products</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT 
                                users.name AS user_name, 
                                COUNT(products.id) AS total_product
                              FROM users
                              INNER JOIN products ON users.id = products.user_id
                              GROUP BY users.id, users.name";
                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?php echo $row['user_name']; ?></td>
                                <td><?php echo $row['total_product']; ?></td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo '<tr><td colspan="2">No users found</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<hr>


<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Display number of products in each category</h4>
        </div>

        <div class="card-body">
            <table class="table table-bordered table-hover text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Categories Name</th>
                        <th>Product Name</th>
                        <th>Total Products</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT 
                    categories.name AS category_name,
                    products.name AS product_name,COUNT(products.id) AS total_product 
                    FROM products 
                    LEFT JOIN categories ON categories.id=products.category_id 
                    GROUP BY categories.id, categories.name,products.name";
                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?php echo $row['category_name']; ?></td>
                                <td><?php echo $row['product_name'] ?></td>
                                <td><?php echo $row['total_product']; ?></td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo '<tr><td colspan="2">No users found</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<hr>


<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Category-wise Total Stock Value</h4>
        </div>

        <div class="card-body">
            <table class="table table-bordered table-hover text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Categories Name</th>
                        <th>Total Stock Value</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT 
                    categories.name AS category_name,
                    SUM(products.price * products.quantity) AS total_stock_value
                    FROM products 
                    LEFT JOIN categories ON categories.id=products.category_id 
                    GROUP BY categories.id, categories.name";
                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?php echo $row['category_name']; ?></td>
                                <td><?php echo $row['total_stock_value']; ?></td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo '<tr><td colspan="2">No users found</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<hr>


<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Show users who added more than 3 products</h4>
        </div>

        <div class="card-body">
            <table class="table table-bordered table-hover text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>User Name</th>
                        <th>Total Product</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT 
                             users.name AS user_name,COUNT(products.id) AS total_product
                             FROM users
                             INNER JOIN products ON products.user_id=users.id
                             GROUP BY users.id
                             HAVING COUNT(products.id)>3";
                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?php echo $row['user_name']; ?></td>
                                <td><?php echo $row['total_product']; ?></td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo '<tr><td colspan="2">No users found</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<hr>

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Display average price of products created by each user</h4>
        </div>

        <div class="card-body">
            <table class="table table-bordered table-hover text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>User Name</th>
                        <th>Avarage Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT 
                             users.name AS user_name,AVG(products.price) AS avarage_price
                             FROM users
                             INNER JOIN products ON products.user_id=users.id
                             GROUP BY users.id";
                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?php echo $row['user_name']; ?></td>
                                <td><?php echo $row['avarage_price']; ?></td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo '<tr><td colspan="2">No users found</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<hr>



<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">List all users including those who have no products</h4>
        </div>

        <div class="card-body">
            <table class="table table-bordered table-hover text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>User Name</th>
                        <th>Product Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query ="SELECT users.name AS user_name,
                                    products.name AS product_name
                            FROM users
                            LEFT JOIN products ON products.user_id = users.id";

                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?php echo $row['user_name']; ?></td>
                                <td><?php echo $row['product_name']?? 'No Product'; ?></td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo '<tr><td colspan="2">No users found</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<hr>


<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Show category name and highest product price in that category</h4>
        </div>

        <div class="card-body">
            <table class="table table-bordered table-hover text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Categories Name</th>
                        <th>Highest Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query ="SELECT 
                                categories.name AS category_name,
                                MAX(products.price) AS highest_price
                            FROM categories
                            JOIN products ON products.category_id = categories.id
                            GROUP BY categories.id, categories.name";

                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?php echo $row['category_name']; ?></td>
                                <td><?php echo $row['highest_price']; ?></td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo '<tr><td colspan="2">No users found</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<hr>


</body>
</html>
