<?php

class Character
{
    private $name;
    private $strengh;
    private $magic;
    private $exp;
    private $lifePoint;

    function __construct($name)
    {
        if (strtolower($name) === "troll") {

            $this->name = $name;
            $this->lifePoint = 200;
            $this->strengh = 50;
            $this->magic = 10;
            echo ("Arrgh je suis Troll !<br>");
        }
        if (strtolower($name) === "gobelin") {

            $this->name = $name;
            $this->lifePoint = 150;
            $this->strengh = 35;
            $this->magic = 50;
            echo ("niboR elleppa'm ej<br>");
        }
        if (strtolower($name) === "pangolin") {

            $this->name = $name;
            $this->lifePoint = 120;
            $this->strengh = 40;
            $this->magic = 100;
            echo ("Pangolin.<br>");
        }
    }
    function __toString()
    {
        return $this->name;
    }

    //GET / SET
    public function getName(): string
    {
        return $this->name;
    }
    public function getStrengh(): int
    {
        return $this->strengh;
    }
    public function getMagic(): int
    {
        return $this->magic;
    }
    public function getExp(): int
    {
        return $this->exp;
    }
    public function getLifePoint(): int
    {
        return $this->lifePoint;
    }

    public function setStrengh(int $strengh): void
    {
        $this->strengh = $strengh;
    }
    public function setMagic(int $magic): void
    {
        $this->magic = $magic;
    }
    public function setLifePoint(int $lifePoint): void
    {
        $this->lifePoint = $lifePoint;
    }

    //ATTACK FUNCTION
    public function attack(Character $character)
    {
        if ($this->strengh == 0) {
            echo ("$this->name ne fait aucun dégât<br>");
            return;
        } else {
            if ($this->name === "troll" && $character === "pangolin") {
                $character->lifePoint = $character->lifePoint - ($this->strengh * 2);
            } elseif ($this->name == $character) {
                $character->lifePoint = $character->lifePoint - $this->strengh;
                echo ("$this->name se frappe lui même et s'inflige $this->strengh de dégât <br>");
            } else {
                $character->lifePoint = $character->lifePoint - $this->strengh;
                $this->exp++;
                echo "$this->name a frappé $character<br>";
                echo "$character a perdu $this->strengh PV<br>";
            }
        }
        if ($character->lifePoint <= 0) {
            echo "$character est mort! <br>";
        }
    }
    //HEAL FUNCTION
    public function heal(Character $nameTarget, int $healValue)
    {
        if (isset($nameTarget)) {
            $nameTarget->lifePoint = $nameTarget->lifePoint + $healValue;
            echo ("$this->name lance un sort de soin sur $nameTarget et le soigne de $healValue PV<br>");
        } else {
            $this->lifePoint = $this->lifePoint + $healValue;
            echo ("$this->name s'est soigné de $healValue PV<br>");
        }
    }
};
