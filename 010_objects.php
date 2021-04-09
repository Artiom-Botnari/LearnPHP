<?php
// TODO: Implement the Car class here
class Car {
    public function __construct($car, $year) {
    	$this->car = $car;
        $this->year = $year;
    }
    public function print_details() {
    	echo "This car is a " . $this->year . " " . $this->car . ".\n";
    }
}
$car = new Car("Toyota", 2006);
$car->print_details();

?>
