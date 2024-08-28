<?php

class Pangolin extends Character {
    public function __construct(string $name, int $strength = 40, int $life = 120, int $magic = 100) {
        // Permet d'appeler la methode __construct du parent (De la class Character)
        // Avec les variables du construct de Troll (donc avec les valeurs par defaut de Troll)
        parent::__construct($name, $strength, $life, $magic);
    }
}