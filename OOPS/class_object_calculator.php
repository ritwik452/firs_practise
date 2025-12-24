<?php
class calculator{
 public $a;
 public $b;
    
  public function __construct($x,$y){
        $this->a=$x;
        $this->b=$y;
  }
  public function add(){
    return $this->a + $this ->b;
  }
  public function sub(){
    return $this->a - $this ->b;
  }
  public function mul(){
    return $this->a * $this->b;
  }
  public function div(){
    return $this->a / $this->b;
  }

}

$cal=new calculator(20,10);
echo $cal->add()."<br>";
echo $cal->sub()."<br>";
echo $cal->mul()."<br>";
echo $cal->div();


?>