<?php

class Gobelin extends Character {
    public function __construct(string $name, int $strength = 35, int $life = 150, int $magic = 50) {
        // Permet d'appeler la methode __construct du parent (De la class Character)
        // Avec les variables du construct de Troll (donc avec les valeurs par defaut de Troll)
        parent::__construct($name, $strength, $life, $magic);
    }

     // Faire une implémentation de la méthode "__toString" afin d'afficher "Je m'appelle " avec le nom du personnage.
     // - echo un gobelin dois afficher le message a l'envers (je m'appelle -> elleppa'm ej)
     public function __toString() : string
     {
         return strrev("Je m'appelle $this->name") . "\n";
     }
}