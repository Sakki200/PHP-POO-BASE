<?php

require_once('./Class/character.php');

$character1 = new Character("Sakki", 15, 0, 50);
$character2 = new Character("Hayasa", 12, 4, 37);

echo ($character1);
$character2->attack($character1);
echo ($character1);
