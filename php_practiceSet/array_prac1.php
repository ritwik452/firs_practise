<?php
$students=[
    ["name" => "ritwik", "marks"=>80],
    ["name"=> "soham","marks"=>90],
    ["name"=>"raja","marks"=>70],
    ["name"=>"kalu", "marks"=>69],

];
foreach ($students as $student) {
    echo "name ".$student["name"]."-----Marks".$student["marks"]."</br>";
};

echo "<hr>";

//add student;
$students[]=["name"=>"kana","marks"=>89];
//update raja marks;
foreach ($students as &$student){
    if ($student["name"]=="raja") {
        $student["marks"]=75;
    }
}
unset($student);

foreach($students as $student){
    echo "name : ".$student["name"]. "----  marks :".$student["marks"]."</br>";
    
}
echo "<hr>";
?>


<?php
$student=[
    "ritwik"=>"A+",
    "nilu"=>"A",
    "Sohan"=>"B",

];
foreach($student as $name=>$grade){
    echo "Name: ".$name. "------Grade: ".$grade."</br>";
};

echo "<hr>";
?>


<?php
$student=[
    "ritwik"=>"A+",
    "nilu"=>"A",
    "Sohan"=>"B",

];
//add  student;
$student["ankit"]="C";
//udpadate student;
$student["nilu"]="AA";

foreach($student as $name=>$grade){
    echo "Name: ".$name. "------Grade: ".$grade."</br>";
};

echo "<hr>";
?>