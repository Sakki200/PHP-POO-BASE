<?php

require_once("./Class/Character.class.php");
require_once("./Class/Troll.class.php");
require_once("./Class/Gobelin.class.php");
require_once("./Class/Pangolin.class.php");

require_once("./Class/Game.class.php");

$robin = new Troll("Robin");
$mahamoud = new Gobelin("Mahamoud");
$quentin = new Pangolin("Quentin");
$quentin->attack($quentin);

// $robin->heal();

// var_dump($robin);
echo($mahamoud);
// $robin = new Character('Robin', 1000);
// $yonel = new Character("Yonel");

// echo($robin);

$game = new Game;

$game->addPlayer($robin);
// $game->addPlayer($yonel);

$game->player(3)->heal();