<!-- A multidimensional array in PHP is an array that contains one or more arrays. It can be thought of as an array of arrays. -->

<?php
// Defining a 2D array
$students = array(
    array("Raju", "Kayal", 22),
    array("chandan", "das", 36),
    array("indra", "dutta", 40)
);

print_r($students);
// Accessing elements of the multidimensional array
echo $students[0][0]; 
echo $students[0][1]; 
echo $students[0][2]; 
// echo $students[1][0];
// echo $students[1][1]; 
// echo $students[2][2]; 
?>
<hr>
<?php
$user=array(
    array("rahul","das",22),
    array("chandan","das",36),
    array("indra","dutta",40),
    array("indranath","sen",60),
);

print_r($user);
echo $user[0][0];
echo $user[3][2];
?>

<hr>

<?php
// Creating a multidimensional array for contacts
$contacts = array(
    array("name" => "Alice", "phone" => "123-456-7890", "email" => "alice@example.com"),
    array("name" => "Bob", "phone" => "987-654-3210", "email" => "bob@example.com"),
    array("name" => "Charlie", "phone" => "555-123-4567", "email" => "charlie@example.com"),
    array("name" => "Diana", "phone" => "999-888-7777", "email" => "diana@example.com")
);

// Loop through the contacts and display their information
// foreach ($array as $value) {
//     // Code to be executed for each $value
// }
foreach ($contacts as $contact) {
    echo "user Name: " . $contact['name'] . "<br>";
    echo "user Phone: " . $contact['phone'] . "<br>";
    echo " user Email: " . $contact['email'] . "<br>";
    echo "----------------------------------<br>";
}
?>

<hr>
<?php
// A 3D array: Courses -> Students -> Grades
$courses = array(
    "Math" => array(
        "John" => array("Grade 1" => "A", "Grade 2" => "B"),
        "Jane" => array("Grade 1" => "B", "Grade 2" => "A")
    ),
    "Science" => array(
        "John" => array("Grade 1" => "B", "Grade 2" => "C"),
        "Jane" => array("Grade 1" => "A", "Grade 2" => "B")
    )
);

// Accessing a specific grade
echo $courses["Math"]["John"]["Grade 1"]; // Output: A
echo $courses["Science"]["Jane"]["Grade 2"]; // Output: B
?>