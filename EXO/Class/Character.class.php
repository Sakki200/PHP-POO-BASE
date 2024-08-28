<?php

abstract class Character {
    // Faire une classe nommée "Character", qui comporte les attributs privés "name", "strength"et "life".
    protected $name;
    protected $strength;
    protected $life;
    protected $magic;

    // Les valeurs par défaut lors de l’instanciation seront respectivement strength 0 et life 100
    public function __construct(string $name, int $strength = 0, int $life = 100, int $magic = 0) {
        $this->name = $name;
        $this->strength = $strength;
        $this->life = $life;
        $this->magic = $magic;
    }

    // Faire une implémentation de la méthode "__toString" afin d'afficher "Je m'appelle " avec le nom du personnage.
    public function __toString() : string
    {
        return "Je m'appelle $this->name\n";
    }

    // Faire les méthodes "getName", "getStrength" et "getLife".
    public function getName() : string
    {
        return $this->name;
    }

    public function getStrength() : int
    {
        return $this->strength;
    }

    public function getLife() : int
    {
        return $this->life;
    }

    public function getMagic() : int
    {
        return $this->magic;
    }

    public function setMagic(int $magic) : void
    {
        $this->magic = $magic;
    }

    // Ajouter a la classe "Character" la methode attack qui prend en paramètre une autre instance de la classe "Character" et qui lui enleve des points de vie en fonction de la force de l'attaquant.
    public function attack(Character $victime) {
        $degats = $this->strength;

        if ($this->life <= 0) {
            echo("$this->name est mort, il ne peux pas attaquer\n");
            return;
        }

        if ($this === $victime) {
            echo("$this->name s'inflige $degats dégats\n");
            return;
        }

        if ($this instanceof Troll && $victime instanceof Pangolin) {
            $degats *= 2;
        }

        // Cette methode affiche les phrases suivantes :- 'nom du personnage attaquant' à frappé 'nom du personnage attaqué'
        echo("$this->name à frappé $victime->name\n");

        // taper de 0 qui affiche un message comme quoi le personnage ne fait pas de dégats
        if ($degats <= 0) {
            echo("$this->name essaye d'attaquer, mais il n'a pas de force, cheh\n");
            return;
        }

        if ($victime->life <= 0) {
            echo("Mais cela ne sert à rien car $victime->name est déja mort\n");
            return;
        }

        $victime->life -= $degats;

        echo("$victime->name à perdu $degats points de vie\n");

        //Si le personnage n'a plus de points de vie, alors afficher :  - 'Nom du personnage' est mort
        if ($victime->life <= 0) {
            echo("$victime->name est mort\n");
        }
    }

    public function heal($player = null) {
        if ($player && $player != $this) {
            $player->life += $this->magic;
            echo("$this->name à soigné $player->name de $this->magic points de vie\n");
            return;
        }

        $this->life += $this->magic;
        echo("$this->name s'est soigné de $this->magic points de vie\n");
    }
}