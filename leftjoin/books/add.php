<?php
include("../database/connection.php");
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
<title>Product Page</title>
</head>
<body>

<div class="container mt-4">
    <div class="col-md-6">
        <div class="cardshadow">
           <div class="card">
               <div class="card-header bg-primary text-white text-center">
                <h4>Add Book</h4>
               </div>
               <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for=""><b>Book Title</b></label>
                        <input type="text" name="title" class="form-control" placeholder="Enter book title">
                    </div>
                    <div class="form-group">
                        <label for=""><b>Select Author</b></label>
                        <select name="author_id" class="form-control">
                            <option value="">Select</option>
                            <?php
                            $query="SELECT * FROM authors";
                            $result=mysqli_query($conn,$query);
                            if (mysqli_num_rows($result)>0) {
                                while($row=mysqli_fetch_assoc($result)){
                                    echo"<option value='{$row['id']}'> {$row['name']}</option> ";
                                }
                            }
                            ?>
                        </select>
                         </div>
                   <button type="submit" class="btn btn-success" name="add">Submit</button>

                </form>
                 <?php
                      if (isset($_POST['add'])) {
                        $title=$_POST['title'];
                        $author_id=$_POST['author_id'];
                    
                        $query="INSERT INTO books (title,author_id) VALUES('$title','$author_id')";
                        $result=mysqli_query($conn,$query);
                        if ($result) {
                           echo "<script>alert('insert successfully'); window.location='view.php';</script>";
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
