<?php

class person {
public $name;
function show(){
    echo "hellow my name is".$this->name;//this keyword is current object;
}
}
$p=new person();
$p->name="Ritwik";
$p->show();
?>