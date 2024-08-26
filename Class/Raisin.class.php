<?php

class Raisin extends Fruit {

    public function __toString() {
        return "coucou";
    }

    public function jus() {
        echo("Je fais du jus de raisin - " . $this->nom);
    }
}