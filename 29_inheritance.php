<?php

/*
|--------------------
| Class
|--------------------
*/

class Car {
    public function drive() {
        echo "car is driving";
    }

    private function funcPrivate() {
        echo "I am Private";
    }
}
class ElectricCar extends Car {
    public function epcu() {
        echo "I am the Electric Power Control Unit";
    }

    protected function funcProtected() {
        echo "I am Protected";
    }
}
class Tesla extends ElectricCar {
    public function autoDrive() {
        echo "I got this. you can sleep";
        $this->funcProtected();
    }
}

$car = new Car();
$electricCar = new ElectricCar();
$tesla = new Tesla();

// $car->drive();

// $electricCar->epcu();

// $electricCar->funcProtected(); // error

// $tesla->autoDrive();

// $tesla->funcProtected(); // error


/*
|--------------------
| End of Class
|--------------------
*/