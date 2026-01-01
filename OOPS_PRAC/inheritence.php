<?php
class person{
    public function show(){
        echo "my name is ritwik";
    }
}
class student extends person{
    public function hide(){
        echo "my name hide";
    }
}
$s=new student();
$s->hide();
$s->show();

?>