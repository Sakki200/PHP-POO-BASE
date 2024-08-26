<?php

class Character
{
    public $name;
    public $strengh;
    public $exp;
    public $lifePoint;

    function __construct($name, $strengh, $exp, $lifePoint)
    {
        $this->name = $name;
        $this->strengh = $strengh;
        $this->exp = $exp;
        $this->lifePoint = $lifePoint;
    }

    function attack(Character $character)
    {
        $character->lifePoint = $character->lifePoint - $this->strengh;
        $this->exp++;
        echo "$this->name a frappé " . $character->name . " avec " . $this->strengh . " dégâts. " . $character->name . " a maintenant " . $character->lifePoint . " point de vie restant.  <br>";
    }

    function __toString()
    {
        return "je suis un $this->name avec $this->strengh de force, $this->lifePoint de vie et $this->exp d'expérience <br>";
    }
};
