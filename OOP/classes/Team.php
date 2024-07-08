<?php
class Team {
    private $name;
    private $coach;

    public function __construct($name, $coach) {
        $this->name = $name;
        $this->coach = $coach;
    }

    public function getName() {
        return $this->name;
    }

    public function getCoach() {
        return $this->coach;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setCoach($coach) {
        $this->coach = $coach;
    }

    public function displayDetails() {
        echo "Team: {$this->name}, Coach: ";
        $this->coach->getDetails();
    }
}
