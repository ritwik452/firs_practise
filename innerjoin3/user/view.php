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
<title>User View Page</title>
</head>
<?php include("../navbar/header.php"); ?>
<body>
   <div class="container mt-4">
    <h1>View All User</h1>
    <table class="table table-striped">
      <h5><a href="add.php" class="btn btn-primary">Add User</a></h5>
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>City</th>
            <th colspan="2">Action</th>
          </tr>
        </thead>
        <tbody>
              <?php
              include("../database/connection.php");
                 $query="SELECT * FROM user";
                 $result=mysqli_query($conn,$query);
                 if (mysqli_num_rows($result)>0) {
                    while ($row=mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row['u_id'] ?></td>
                            <td><?php echo $row['u_name'] ?></td>
                            <td><?php echo $row['u_email'] ?></td>
                            <td><?php echo $row['u_gender'] ?></td>
                            <td><?php echo $row['city'] ?></td>
                            <td><a href="edit.php?u_id=<?php echo $row['u_id']; ?>" class="btn btn-info">Edit</a></td>
                            <td><a href="delete.php?u_id=<?php echo $row['u_id']; ?>" class="btn btn-danger">Delete</a></td>

                        </tr>
                        <?php
                    }
                 }
              ?>
        </tbody>
    </table>
   </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>