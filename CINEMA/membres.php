<?php

// Recuperation des models
require_once("./Models/Database.class.php");
require_once("./Models/Membre.class.php");

$modelMembre = new Membre;

if (!empty($_GET['search'])) {
    $membres = $modelMembre->getByName($_GET['search']);
} else {
    $membres = [];
}

include_once("./Views/membres.php");