<?php
class Vehicle {
    public $brand;
    protected $speed;

    public function __construct($brand, $speed) {
        $this->brand = $brand;
        $this->speed = $speed;
    }

    public function move() {
        return "$this->brand is moving.";
    }

    protected function getSpeed() {
        return $this->speed;
    }
}

// Child class inheriting from Vehicle
class Car extends Vehicle {
    public function honk() {
        return "$this->brand honks: Beep!";
    }

    // Override the move method
    public function move() {
        return "$this->brand is driving on the road.";
    }

    // Access protected method from parent
    public function showSpeed() {
        return "$this->brand has a speed of " . $this->getSpeed() . " km/h.";
    }
}

// Create an object of the child class
$car = new Car("Toyota", 120);

// Use methods
echo $car->move();      // Output: Toyota is driving on the road.
echo "<br>";
echo $car->honk();      // Output: Toyota honks: Beep!
echo "<br>";
echo $car->showSpeed(); // Output: Toyota has a speed of 120 km/h.
?>