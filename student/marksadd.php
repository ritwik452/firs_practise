<?php
include("connection.php");
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
<title>mark</title>
</head>
<body>
<div class="container mt-4">
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card">
                <div class="card-header bg-primary text-center text-white">
                    <h4>Student mark</h4>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <label for=""><b>Name</b></label>
                        <select name="student_id" class="form-control">
                            <option value="">Select</option>
                            <?php
                            $query="SELECT * FROM student";
                            $result=mysqli_query($conn,$query);
                            if (mysqli_num_rows($result)>0) {
                                while($row=mysqli_fetch_assoc($result)){
                                    echo "<option value='{$row['id']}'>{$row['name']}</option>";
                                }

                            }
                            ?>

                        </select>
                        <div class="form-group">
                            <label for=""><b>Marks</b></label>
                            <input type="text" name="mark" class="form-control" >
                        </div>
                        <button class="btn btn-success" type="submit" name="save">Save</button>
                    </form>

                  <?php
                     if (isset($_POST['save'])) {
                        $student_id=$_POST['student_id'];
                        $mark=$_POST['mark'];
                        $query="INSERT INTO marks(student_id,mark) VALUES('$student_id','$mark') ";
                        $result=mysqli_query($conn,$query);
                        if ($result) {
                            header("location: marksview.php");
                        }
                     }
                  ?>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>