<?php

class Event {
    private $type;
    private $minute;
    private $player;
    private $match;

    public function __construct($type, $minute, $player, $match) {
        $this->type = $type;
        $this->minute = $minute;
        $this->player = $player;
        $this->match = $match;
    }

    public function getType() {
        return $this->type;
    }

    public function getMinute() {
        return $this->minute;
    }

    public function getPlayer() {
        return $this->player;
    }

    public function getMatch() {
        return $this->match;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function setMinute($minute) {
        $this->minute = $minute;
    }

    public function setPlayer($player) {
        $this->player = $player;
    }

    public function setMatch($match) {
        $this->match = $match;
    }

    public function displayDetails() {
        echo "Event: $this->type, Minute: $this->minute, Player: $this->player, Match: $this->match";
    }
}
