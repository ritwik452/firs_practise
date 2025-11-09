<?php
include("database/connection.php")
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
<title>User LIst</title>
</head>
<body>
    <div class="container mt-4">
        <table class="table table-bordered table-hover">
            <h3>User List</h3>
            <a href="adduser.php" class="btn btn-primary">Add User</a>
            <thead>
               <tr>
                <th class="text-center" scope="col">#</th>
                <th class="text-center" scope="col">NAME</th>
                <th class="text-center" scope="col">EMAIL</th>
                <th class="text-center" scope="col">PHONE</th>
                <th class="text-center" scope="col">CITY</th>
                <th class="text-center" scope="col">ADDRESS</th>
                <th class="text-center" colspan="2" scope="col">ACTION</th>

               </tr>
            </thead>

            <tbody>
                  <?php
                  $query="SELECT * FROM user";
                  $result=mysqli_query($conn,$query);
                  if (mysqli_num_rows($result)>0) {
                    while ($row=mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row['id']?></td>
                            <td><?php echo $row['name']?></td>
                            <td><?php echo $row['email']?></td>
                            <td><?php echo $row['phone']?></td>
                            <td><?php echo $row['city']?></td>
                            <td><?php echo $row['address']?></td>
                            <td><a href="<?php echo "userupdate.php?id=".$row['id']?>" class="btn btn-primary">Update</a></td>
                            <td><a href="<?php echo "delete.php?id=".$row['id']?>" class="btn btn-danger">Delete</a></td>

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