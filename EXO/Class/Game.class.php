<?php

// Faire une classe nommée "Game", qui comporte l'attribut privé "players".
class Game {
    // L'attribut $players est un tableau de personnages (par défaut vide).
    private $players = [];

    // Lors de l'instanciation de la classe "Game", le texte "Nouvelle partie !" doit s'afficher.
    public function __construct() {
        echo("Nouvelle partie !\n");
    }

    // Ajouter la methode addPlayer($player) qui ajoute un "Character" dans le tableau $players.
    public function addPlayer(Character $player) {
        $this->players[] = $player;
        // Meme chose, ajoute $player a la fin du tableau
        // array_push($this->players, $player);

        // Lors de l'appel de cette methode, afficher dans le terminal "Nouveau personnage " et le nom du "Character"
        echo("Nouveau personnage {$player->getName()}\n");
    }

    //Toutes les actions doivent être faites via $game, jamais de $robin->attack()
    public function player(int $i) {
        if (array_key_exists($i, $this->players)) {
            return $this->players[$i];
        }

        // Si je vais chercher un joueur qui n'existe pas dans le tableau des joueurs de la Game
        die("Recuperation du joueur numero $i incorrect, arret du programme.\n");
    }
}