<?php

class Troll extends Character {
    public function __construct(string $name, int $strength = 50, int $life = 200, int $magic = 10) {
        // Permet d'appeler la methode __construct du parent (De la class Character)
        // Avec les variables du construct de Troll (donc avec les valeurs par defaut de Troll)
        parent::__construct($name, $strength, $life, $magic);
    }
}