<?php

// Recuperation des models
require_once("./Models/Database.class.php");
require_once("./Models/Membre.class.php");

require_once("./helper.php");

$modelMembre = new Membre;

if (empty($_GET['id'])) {
    header("Location: /membres.php");
    return;
}

$membre = $modelMembre->getById($_GET['id']);
$films = $modelMembre->getHistoryById($_GET['id']);

include_once("./Views/membre.php");