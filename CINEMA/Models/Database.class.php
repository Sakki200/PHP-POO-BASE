<?php

abstract class Database {
    protected $db;
    protected $base = "SELECT film.*, genre.nom AS genre, distrib.nom AS distrib FROM film 
    LEFT JOIN genre ON film.genre_id =genre_id
    LEFT JOIN distrib ON film.distrib_id = distrib_id ";

    public function __construct() {
        $this->db = new PDO("mysql:host=localhost;port=3308;dbname=cinematp;charset=utf8", 'root', '');
    }
}