<?php 

class Player {
    private $name;
    private $dateOfBirth;
    private $position;
    private $team;

    public function __construct($name, $dateOfBirth, $position, $team) {
        $this->name = $name;
        $this->dateOfBirth = $dateOfBirth;
        $this->position = $position;
        $this->team = $team;
    }

    public function getName() {
        return $this->name;
    }

    public function getDateOfBirth() {
        return $this->dateOfBirth;
    }

    public function getPosition() {
        return $this->position;
    }

    public function getTeam() {
        return $this->team;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setDateOfBirth($dateOfBirth) {
        $this->dateOfBirth = $dateOfBirth;
    }

    public function setPosition($position) {
        $this->position = $position;
    }

    public function setTeam($team) {
        $this->team = $team;
    }

    public function displayDetails() {
        echo "Player: $this->name, Date of Birth: $this->dateOfBirth, Position: $this->position, Team: $this->team";
    }
}
