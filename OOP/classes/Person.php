<?php

abstract class Person {
    protected $name;
    protected $address;
    protected $phoneNumber;

    public function __construct($name, $address, $phoneNumber) {
        $this->name = $name;
        $this->address = $address;
        $this->phoneNumber = $phoneNumber;
    }

    abstract public function getDetails();
}
