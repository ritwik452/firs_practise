<?php
class animal{
    public $name;
    public function __construct($name){
          $this->name=$name;
    }
}
class dog extends animal{
    public function show(){
        echo "this is ".$this->name;
    }
}
$d=new dog("cow");
$d->show();
?>