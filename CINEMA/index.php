<?php
// Recuperation des models
require_once("./Models/Database.class.php");
require_once("./Models/Film.class.php");
require_once("./Models/Genre.class.php");

// Recuperation du helper
require_once("./helper.php");

// Logique de code
$modelFilm = new Film;
$modelGenre = new Genre;

if (!empty($_GET['search'])) {
    $films = $modelFilm->getByName($_GET['search']);
} elseif (!empty($_GET['genre'])) {
    $films = $modelFilm->getByGenre($_GET['genre']);
} elseif (!empty($_GET['date_proj'])) {
    $films = $modelFilm->getByDateProj($_GET['date_proj']);
} elseif (!empty($_GET['date_prod'])) {
    $films = $modelFilm->getByDateProd($_GET['date_prod']);
}
else {
    $page = $_GET['page'] ?? 1;
    $films = $modelFilm->getAll($page);
}
$pages = $modelFilm->getPages(50);
$genres = $modelGenre->getAll();
$anneeProd = $modelFilm->getAnneeProd();

// Inclusion du HTML
include_once("./Views/home.php");