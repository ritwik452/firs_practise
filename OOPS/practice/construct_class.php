<?php
class Person {
    public $name;

   // public function __construct($name){
     //   $this->name = $name;
       // echo "Hello I am " . $this->name;
    //}

    public function show(){
        echo "<br>My name is " . $this->name;
    }
}

$call = new Person();
$call->name="Ritwik";
$call->show();

?>
