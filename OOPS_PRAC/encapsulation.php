<?php

class Person {
    protected $name;

    function setName($name) {
        $this->name = $name;
    }
}

class Student extends Person {
    function showName() {
        echo $this->name;  
    }
}

$p = new Student();
$p->setName("Ritwik");
$p->showName();  

?>