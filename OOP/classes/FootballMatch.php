<?php

class FootballMatch {
    private $team1;
    private $team2;
    private $date;
    private $time;
    private $referee;
    private $result;

    public function __construct($team1, $team2, $date, $time, $referee, $result = '') {
        $this->team1 = $team1;
        $this->team2 = $team2;
        $this->date = $date;
        $this->time = $time;
        $this->referee = $referee;
        $this->result = $result;
    }

    public function getTeam1() {
        return $this->team1;
    }

    public function getTeam2() {
        return $this->team2;
    }

    public function getDate() {
        return $this->date;
    }

    public function getTime() {
        return $this->time;
    }

    public function getReferee() {
        return $this->referee;
    }

    public function getResult() {
        return $this->result;
    }

    public function setTeam1($team1) {
        $this->team1 = $team1;
    }

    public function setTeam2($team2) {
        $this->team2 = $team2;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function setTime($time) {
        $this->time = $time;
    }

    public function setReferee($referee) {
        $this->referee = $referee;
    }

    public function setResult($result) {
        $this->result = $result;
    }

    public function displayDetails() {
        echo "Match: {$this->team1} vs {$this->team2}, Date: {$this->date}, Time: {$this->time}, Referee: {$this->referee}, Result: {$this->result}";
    }
}
