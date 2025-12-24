<?php
//father
class Animal {
    public $name;

    public function sound() {
        return "Animal makes sound";
    }
}

// Child 
class Dog extends Animal {

    public function sound() {
        return "Dog barks";
    }
}