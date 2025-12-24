<?php
include('database/connection.php');

if (!isset($_GET['book_id'])) {
    die("Book not found");
}

$book_id = $_GET['book_id'];

$query = "SELECT book_file FROM books WHERE id='$book_id'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $pdf = $row['book_file'];
}else {
    die("Book not found");
}



?>

<!DOCTYPE html>
<html>
<head>
    <title>Read Book</title>
</head>
<body style="margin:0">

<iframe
    src="http://localhost/phpclass/PRAKASHANI_WEB/uploads/pdf/<?php echo basename($pdf); ?>"
    width="100%"
    height="1000px"
    style="border:none;">
</iframe>

</body>
</html>
