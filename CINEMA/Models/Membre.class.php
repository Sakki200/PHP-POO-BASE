<?php

class Membre extends Database {
    public function getByName($name) {
        $request = $this->db->prepare("SELECT membre.*, detail.nom, detail.prenom FROM membre
        LEFT JOIN detail ON membre.detail_id = detail.id
        WHERE nom LIKE :name 
        OR prenom LIKE :name");

        $request->execute([
            'name' => '%' . $name . '%'
        ]);

        $data = $request->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }


    public function getById($id) {
        $request = $this->db->prepare("SELECT membre.*, detail.*, CONCAT(detail.nom, ' ', detail.prenom) AS full_name FROM membre
        LEFT JOIN detail ON membre.detail_id = detail.id
        WHERE membre.id = :id
        ");
        
        $request->execute([
            'id' => $id
        ]);

        $data = $request->fetch(PDO::FETCH_ASSOC);

        return $data;
    }

    public function getHistoryById($id) {
        $request = $this->db->prepare("SELECT film.*, genre.nom AS genre, distrib.nom as distrib FROM historique_membre
        LEFT JOIN film ON film.id = historique_membre.film_id
        LEFT JOIN genre ON film.genre_id = genre.id 
        LEFT JOIN distrib ON film.distrib_id = distrib.id
        WHERE historique_membre.membre_id = :id
        ");

        $request->execute([
            'id' => $id
        ]);

        $data = $request->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }
}