<?php
$company = [
    "HR" => ["John", "Mary"],
    "IT" => ["Alice", "Bob", "Charlie"],
    "Finance" => ["David", "Emma"]
];

foreach($company as $depertment=>$employees){
    echo $depertment ."<br>";
    foreach($employees as $employee){
        echo $employee."<br>";
    }
}
echo "<hr>";
?>

<?php
$fruits = [
    ["Apple", "Banana", "Mango"],
    ["Orange", "Pineapple", "Grapes"],
    ["Kiwi", "Papaya", "Watermelon"]
];
foreach ($fruits as $group ) {
    foreach($group as $fruit){
        echo $fruit." ";
    }
    echo "<br>";
}
echo "<hr>";
?>
<?php
$students = [
    ["name" => "Riya", "age" => 20, "course" => "BCA"],
    ["name" => "Arjun", "age" => 21, "course" => "MCA"],
    ["name" => "Priya", "age" => 19, "course" => "B.Tech"]
];
foreach($students as $student ){
    foreach($student as $key=>$value){
       echo $key.":".$value."<br>";
    }
}
echo "<br>";
?>
<?php
$employees = [
    "E101" => ["name" => "Rahul", "dept" => "HR", "salary" => 25000],
    "E102" => ["name" => "Sneha", "dept" => "IT", "salary" => 35000],
    "E103" => ["name" => "Amit", "dept" => "Finance", "salary" => 30000]
];

foreach ($employees as $EmployeeId => $employee) {
    echo $EmployeeId."<br>";
    foreach($employee as $key=>$value){
        echo $key.":".$value."<br>";
    }
}
echo "<hr>";

?>
<?php
$data = [
    "Fruits" => [
        "Tropical" => ["Mango", "Papaya", "Pineapple"],
        "Berries" => ["Strawberry", "Blueberry"]
    ],
    "Vegetables" => [
        "Leafy" => ["Spinach", "Lettuce"],
        "Root" => ["Carrot", "Beetroot"]
    ]
];
foreach($data as $category=>$types){
    echo "category:".$category."<br>";
     foreach ($types as $type=>$items) {
        echo "type:".$type."<br>";
        foreach($items as $item){
          echo $item."<br>";
        }
        echo "<br>";
     }
}
?>