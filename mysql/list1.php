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
<title>Student Details</title>
</head>
<body>

    
    <?php  
          include("database/connection.php");
    ?>


    <div class="container mt-4">
        <div class="row">
          <div class="col-md-3">
            <?php include ("navbar/sidebar.php"); 
            ?>
        </div>
 
        <div class="col-md-9">
            <div class="row">
             
               <?php include("navbar/header.php"); ?>

            <?php
    
            $query = "SELECT * FROM user WHERE 1";

             if (!empty($_GET['search'])) {
                  $search=$_GET['search'];
                  $query="SELECT * FROM user WHERE fname LIKE '%$search%' OR lname LIKE '%$search%' OR city LIKE '%$search%'";
             }

                
                if (!empty($_GET['city'])) {
                    $cityarray=$_GET['city'];
                    $city_list = "'" . implode("','", $cityarray) . "'";
                    $query .= " AND city IN ($city_list)";
                }

                if (!empty($_GET['course'])) {
                    $coursearray=$_GET['course'];
                    $course_list = "'" . implode("','", $coursearray) . "'";
                    $query .= " AND course IN ($course_list)";
                }


                
                        if (!empty($_GET['marks'])) {
                            $marklist=[];
                            foreach($_GET['marks'] as $m){
                                switch ($m) {
                                    case '100':
                                       $marklist[]="marks=100";
                                        break;
                                    case '90-99':
                                        $marklist[]="marks BETWEEN 90 AND 99";
                                        break;
                                    case '75-89':
                                        $marklist[]="marks BETWEEN 75 AND 89";
                                        break;
                                    case '60-74':
                                        $marklist[]="marks BETWEEN 60 AND 74";
                                        break;
                                    case '45-59':
                                        $marklist[]="marks BETWEEN 45 AND 59";
                                        break;
                                    case '0-44':
                                        $marklist[]="marks BETWEEN 0 AND 44";
                                        break;
                                }
                            }
                        }

                       if (!empty($marklist)) {
                        $query .= " AND (" . implode(" OR ", $marklist) . ") ";

                    }

        
              

            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>

            <div class="col-md-4 mb-4 mt-2">

                <div class="card shadow h-100">
                    <div class="card-body">
                        <h4 class="card-title">
                           <b><?php echo $row['fname'] . " " . $row['lname']; ?></b>
                        </h4>

                        <p><b>Email:</b> <?php echo $row['email']; ?></p>
                        <p><b>City:</b> <?php echo $row['city']; ?></p>
                        <p><b>Phone:</b> <?php echo $row['phone']; ?></p>
                        <p><b>Marks:</b> <?php echo $row['marks']; ?></p>
                        <p><b>Course:</b> <?php echo $row['course']; ?></p>
                    </div>

                    <div class="card-footer bg-white text-center">
                        <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash-alt"></i> Delete
                        </a>
                    </div>
                </div>

            </div>

            <?php
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

<?php include("navbar/footer.php"); ?>