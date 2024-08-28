<?php

class Film extends Database {
    private $base = "SELECT film.*, genre.nom AS genre, distrib.nom as distrib
                    FROM film
                    LEFT JOIN genre ON film.genre_id = genre.id 
                    LEFT JOIN distrib ON film.distrib_id = distrib.id ";


    public function getAll($page) {
        $offset = ($page - 1) * 50;
        $request = $this->db->prepare($this->base . "LIMIT 50 OFFSET :offset");
        $request->bindParam('offset', $offset, PDO::PARAM_INT);
        $request->execute();

        $data = $request->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    public function getByName($name) {
        $request = $this->db->prepare($this->base . "WHERE titre LIKE :name LIMIT 20");

        $request->execute([
            'name' => '%' . $name . '%'
        ]);

        $data = $request->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    public function getByGenre($genre_id) {
        $request = $this->db->prepare($this->base . "WHERE genre_id = :genre_id LIMIT 20");

        $request->execute([
            'genre_id' =>  $genre_id 
        ]);

        $data = $request->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    public function getPages($perPage) {
        $request = $this->db->prepare("SELECT ROUND(COUNT(*) / :perPage) AS pages FROM film");

        $request->execute([
            'perPage' => $perPage
        ]);

        $data = $request->fetch(PDO::FETCH_ASSOC);

        return $data['pages'];
    }

    public function getByDateProj($date) {
        $request = $this->db->prepare($this->base . "WHERE :date BETWEEN date_debut_affiche AND date_fin_affiche LIMIT 20");

        $request->execute([
            'date' =>  $date 
        ]);

        $data = $request->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    public function getAnneeProd() {
        $request = $this->db->prepare("SELECT DISTINCT annee_prod FROM film ORDER BY annee_prod");

        $request->execute();

        $data = $request->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    public function getByDateProd($date) {
        $request = $this->db->prepare($this->base . "WHERE annee_prod = :date LIMIT 20");

        $request->execute([
            'date' =>  $date 
        ]);

        $data = $request->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }
}