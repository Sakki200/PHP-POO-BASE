<?php 

require_once("./Class/Fruit.class.php");

// Permet d'instancier un nouveau fruit avec des valeurs qui seront récupérées dans le __construct
$fruit = new Fruit('Jaune', 50, 5, "Banane");
$fruit2 = new Fruit('Orange', 2, 500, "Kaki");

echo($fruit);

// $fruit->couleur = "Vert";
var_dump($fruit);

$fruit->salade($fruit2);