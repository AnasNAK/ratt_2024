<?php
// require_once 'Person.php';

class Referee extends Person {
    public function __construct($name, $address, $phoneNumber) {
        parent::__construct($name, $address, $phoneNumber);
    }

    public function getDetails() {
        echo "Referee: {$this->name}, Address: {$this->address}, Phone Number: {$this->phoneNumber}\n";
    }
}
