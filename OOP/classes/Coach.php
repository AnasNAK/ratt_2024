<?php
// require_once 'Person.php';

class Coach extends Person {
    public function __construct($name, $address, $phoneNumber) {
        parent::__construct($name, $address, $phoneNumber);
    }

    public function getDetails() {
        echo "Coach: {$this->name}, Address: {$this->address}, Phone Number: {$this->phoneNumber}\n";
    }
}
