<?php
class cons{
    public $name;
    function __construct($name){
      $this->name=$name;
     
        
     }
     public function show(){
        echo $this->name;
     }
}
$c=new cons("Ritwik");
$c->show();

?>