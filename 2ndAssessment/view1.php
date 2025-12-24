<?php
session_start();
if (!isset($_SESSION['userid'])) {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Page</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">

<style>
    body{
        background: #f7f7f7;
    }
    .card{
        margin-top: 40px;
        box-shadow: 0px 0px 15px rgba(0,0,0,0.1);
        border-radius: 10px;
    }
    .card-header{
        background: #007bff;
        color: white;
        text-align: center;
        font-size: 28px;
        padding: 20px 0;
        border-radius: 10px 10px 0 0;
    }
    table img{
        border-radius: 8px;
        object-fit: cover;
    }
    table tbody tr:hover{
        background: #e9f3ff;
    }
</style>

</head>
<body>
    

<div class="container mt-4">
    <?php include("navbar/header.php"); ?>
    <div class="card">
        <div class="card-header">Student List</div>

        <div class="card-body">
            <table class="table table-bordered table-hover text-center">
                <thead class="thead-dark">
                    <tr>
                        <th width="60">ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Image</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("database/connection.php");
                    
                    $query="SELECT * FROM user";
                    $result=mysqli_query($conn,$query);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['gender']; ?></td>
                            <td>
                                <img src="<?php echo $row['img']; ?>" width="80" height="80">
                            </td>
                            <td ><a href="update.php?id=<?php echo $row['id'] ; ?>"  class="btn btn-info">Update</a></td>
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

</body>
</html>
<?php
include("navbar/footer.php");

?>
