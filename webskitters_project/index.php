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
<title>Title</title>
</head>
<body>
<div class="container">
    <h2 class="mb-3">1) All Posts With Author Name & Email</h2>
        <table class="table table-bordered table-striped mt-3">
            <thead class="table-dark">
                <tr>
                    <th>Post ID</th>
                    <th>Post Title</th>
                    <th>Author Name</th>
                    <th>Author Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                 $query="SELECT posts.id,
                                posts.title,
                                users.name AS author_name,
                                users.email AS author_email
                                FROM posts
                                INNER JOIN users ON posts.user_id=users.id";
                    $result=mysqli_query($conn,$query);
                    if (mysqli_num_rows($result)>0) {
                        while ($row=mysqli_fetch_assoc($result)) {
                              ?>
                                 <tr>
                                    <td><?php echo $row['id'] ?></td>
                                    <td><?php echo $row['title'] ?></td>
                                    <td><?php echo $row['author_name'] ?></td>
                                    <td><?php echo $row['author_email'] ?></td>
                                 </tr>
                              <?php
                        }
                    }            
               ?>   

            </tbody>
                 
            </table>

</div>
          </hr>

      

    <div class="container mt-4">
  <h2 class="mb-3">2) Posts With Total Comment Count (Zero Included)</h2>

    <table class="table table-bordered table-striped mt-3">
        <thead class="table-dark">
            <tr>
                <th>Post ID</th>
                <th>Post Title</th>
                <th>Author Name</th>
                <th>Total Comments</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = "
                    SELECT 
                        posts.id,
                        posts.title,
                        users.name AS author_name,
                        COUNT(comments.id) AS total_comments
                    FROM posts
                    LEFT JOIN comments ON posts.id = comments.post_id
                    INNER JOIN users ON posts.user_id = users.id
                    GROUP BY posts.id
                ";

                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['title']; ?></td>
                            <td><?php echo $row['author_name']; ?></td>
                            <td><?php echo $row['total_comments']; ?></td>
                        </tr>

                    <?php }
                } else {
                    echo "<tr><td colspan='4' class='text-center text-danger'>No posts found</td></tr>";
                }
            ?>
        </tbody>
    </table>

</div>
            </hr>



        
<div class="container mt-4">
    <h2 class="mb-3">4) Top 5 posts by comment count </h2>

    <table class="table table-bordered table-striped mt-3">
        <thead class="table-dark">
            <tr>
                <th>Post ID</th>
                <th>Post Title</th>
                <th>Author Name</th>
                <th>Total Comments</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = "
                    SELECT 
                        posts.id AS post_id,
                        posts.title,
                        users.name AS author_name,
                        COUNT(comments.id) AS comment_count
                    FROM posts
                    INNER JOIN users ON posts.user_id = users.id
                    LEFT JOIN comments ON posts.id = comments.post_id
                    GROUP BY posts.id, posts.title, users.name
                    ORDER BY comment_count DESC
                    LIMIT 5
                ";

                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        
                        <tr>
                            <td><?php echo $row['post_id']; ?></td>
                            <td><?php echo $row['title']; ?></td>
                            <td><?php echo $row['author_name']; ?></td>
                            <td><?php echo $row['comment_count'];?></td>
                        </tr>

                    <?php }
                } else {
                    echo "<tr><td colspan='4' class='text-center text-danger'>No data found</td></tr>";
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