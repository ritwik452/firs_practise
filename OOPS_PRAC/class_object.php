<?php
class person {
  public $name;

  public function show(){
    echo $this->name;
  }  
}
$p=new person();
$p->name="Ritwik";
$p->show();
echo "<hr>";
?>


<?php
class style{
    public $name;
    public function show($name){
        echo $this->name=$name;
        
    }


}
$s=new style();
$s->show("Ritwik");
echo "<hr>";
?>

<?php
class nila{
    public $name;

    public function setname($name){
        $this->name=$name;
    }
    public function show(){
       echo $this->name;
    }
}
$n=new nila();
$n->setname("ritwik");
$n->show();
?>

