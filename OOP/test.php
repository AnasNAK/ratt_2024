<?php

require_once 'classes/Person.php';
require_once 'classes/Coach.php';
require_once 'classes/Referee.php';
require_once 'classes/Team.php';
require_once 'classes/Player.php';
require_once 'classes/FootballMatch.php';
require_once 'classes/Event.php';

echo "\n";

$coach = new Coach("John Smith", "123 Main St", "555-555-5555");
$coach->getDetails(); 

echo "\n";

$team = new Team("Team A", $coach);
$team->displayDetails(); 

echo "\n";

$player = new Player("Player 1", "1990-01-01", "Forward", "Team A");
$player->displayDetails(); 

echo "\n\n";

$referee = new Referee("Jane Doe", "456 Elm St", "555-555-5556");
$referee->getDetails(); 
echo "\n";

$match = new FootballMatch("Team A", "Team B", "2023-07-08", "15:00", "Jane Doe");
$match->displayDetails(); 

echo "\n\n";

$event = new Event("Goal", 45, "Player 1", "Team A vs Team B");
$event->displayDetails(); 
echo "\n\n";
