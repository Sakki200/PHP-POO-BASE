<?php

require_once('./Class/character.php');
require_once('./Class/game.php');

$game = new Game;
$gobelin1 = new Character('gobelin');
$troll1 = new Character('troll');

$game->addPlayer($gobelin1);
$game->addPlayer($troll1);
$game->player(0)->attack($troll1);
$game->player(0)->attack($gobelin1);
$game->player(0)->heal($troll1, 40);
