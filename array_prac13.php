<?php
$students = [
    ["name" => "ritwik", "marks" => 80],
    ["name" => "soham",  "marks" => 90],
    ["name" => "raja",   "marks" => 70],
    ["name" => "kalu",   "marks" => 69],
];
// ✅ Display all students
foreach ($students as $student) {
    echo "Name : " . $student["name"] . " ---- Marks : " . $student["marks"] . "<br>";
}
echo "<hr>";

// ✅ Add a new student
$students[] = ["name" => "kana", "marks" => 89];

// ✅ Update marks of 'raja'
foreach ($students as &$student) {
    if ($student["name"] == "raja") {
        $student["marks"] = 75;
    }
}
unset($student); // to break reference

// ✅ Display all students
foreach ($students as $student) {
    echo "Name : " . $student["name"] . " ---- Marks : " . $student["marks"] . "<br>";
}
echo "<hr>";
?>
