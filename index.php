<?php 

require_once("./Class/Fruit.class.php");
require_once("./Class/Raisin.class.php");


// Permet d'instancier un nouveau fruit avec des valeurs qui seront récupérées dans le __construct
$fruit = new Raisin('jaune', 50, 5, "Banane");
$fruit2 = new Raisin('Orange', 2, 500, "Kaki");

$fruit->setCouleur('gris');
echo($fruit->getCouleur());

echo($fruit);