<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<title>View Page</title>
</head>

<body>
    <div class="container mt-4">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-primary text-center text-white">
                    <h4>List</h4>
                </div>

                <div class="card-body">
                    <h6><a href="add.php" class="btn btn-success">Add Product</a></h6>

                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Marks</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                $query = "
                                    SELECT marks.id, students.name, marks.marks 
                                    FROM marks
                                    INNER JOIN students ON marks.student_id = students.id
                                ";

                                $result = mysqli_query($conn, $query);

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['marks']; ?></td>

                                    <td>
                                        <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>
                                    </td>
                                    <td>
                                        <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php 
                                    }
                                }
                            ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

</body>
</html>
