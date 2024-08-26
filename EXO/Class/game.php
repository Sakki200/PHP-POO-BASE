<?php


class Game extends Character
{

    private $players = [];

    public function __construct()
    {
        echo ("Nouvelle partie !<br>");
    }
    public function addPlayer($playerName)
    {
        array_push($this->players, $playerName);
    }

    public function player(int $index)
    {
        if (isset($this->players[$index])) {
            return $this->players[$index];
        } else {
            return "Aucun joueur à cet index";
        }
    }
}
