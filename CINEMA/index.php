<?php

require_once("./Models/Database.class.php");
require_once("./Models/ClientResearch.class.php");
require_once("./Models/MovieResearch.class.php");

$client = new Client;
$movie = new Movie;

if (!empty($_GET['option']) || !empty($_GET['search'])) {
    $option = $_GET['option'];
    $search = $_GET['search'];

    switch ($option) {
        case "0":
            $movieResearch = $movie->getByName($search);;
            break;
        case "1":
            $movieResearch = $movie->getByPublishDate($search);
            break;
        case "2":
            $movieResearch = $movie->getByProdDate($search);
            break;
        case "3":
            $movieResearch = $movie->getByGenre($search);
            break;
        case "4":
            $clientResearch = $client->getByName($search);
            break;
        case "5":
            $clientResearch = $client->getByFirstName($search);
            break;
    }
}


require_once("./Views/home.php");
