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
<title>View Page</title>
</head>
<body>

<div class="container mt-4">
    <h3>Student List</h3>
    <a href="operator.php" class="btn btn-primary">Add Student</a>
   <table class="table table-striped">
      <thead >
          <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">City</th>
            <th scope="col">Phone</th>
            <th scope="col">Marks</th>
            <th scope="col">Course</th>

            <th scope="col" colspan="2">Action</th>
          </tr>
      </thead>
      <tbody>

        <?php
        include("database/connection.php");
           //$query="SELECT * FROM user";
           //$query="SELECT * FROM user WHERE city='delhi' OR city='kolkata'";
           //$query="SELECT * FROM user WHERE city='purbamedinipur' AND course='PHP'";
           //$query="SELECT * FROM user WHERE NOT city='kolkata'";
           //$query="SELECT * FROM user ORDER BY fname ASC";
           //$query="SELECT * FROM user ORDER BY marks DESC";
           //$query="SELECT * FROM user WHERE marks=(SELECT MAX(marks) FROM user)";
           //$query="SELECT * FROM user WHERE marks=(SELECT MIN(marks) FROM user )";


            /*$query = "SELECT COUNT(id) AS total FROM user";
             $result = mysqli_query($conn,$query);
             $row = mysqli_fetch_assoc($result);

            echo "Total Students = " . $row['total'];
            */

            //$query="SELECT * FROM user WHERE marks=(SELECT AVG(marks) FROM user )";
            //$query="SELECT * FROM user WHERE fname LIKE 'r%'";
            //$query="SELECT * FROM user WHERE fname LIKE '%n'";
            //$query="SELECT * FROM user WHERE marks BETWEEN 60 AND 80";
            //$query="SELECT * FROM user WHERE course IN ('java','php')";
            //$query="SELECT * FROM user ORDER BY marks ASC LIMIT 3";
            //$query="SELECT * FROM user ORDER BY marks DESC LIMIT 3";
            

           $result=mysqli_query($conn,$query);
           if (mysqli_num_rows($result)>0) {
            $i=1;
            while ($row=mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $i++ ?></td>
                    <td><?php echo $row['fname']?></td>
                    <td><?php echo $row['lname']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['city']?></td>
                    <td><?php echo $row['phone']?></td>
                    <td><?php echo $row['marks']?></td>
                    <td><?php echo $row['course'] ?></td>
                    <th><a href="<?php echo "update.php?id=".$row['id'] ?>" class="btn btn-info">Update</a></th>
                    <th><a href="<?php echo "delete.php?id=".$row['id'] ?>" class="btn btn-danger">Delete</a></th>

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