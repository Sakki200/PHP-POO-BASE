<?php

class Movie extends Database
{

    public function getAll()
    {
        $request = $this->db->prepare("SELECT * FROM film");

        $request->execute();

        $data = $request->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    public function getByName($titre)
    {
        $request = $this->db->prepare($this->base . "WHERE titre LIKE :titre LIMIT 20");

        $request->execute([
            'titre' => "%" . $titre . "%"
        ]);

        $data = $request->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }
    public function getByPublishDate($date)
    {
        $request = $this->db->prepare($this->base .  "WHERE date_debut_affiche LIKE :pubdate LIMIT 20");

        $request->execute([
            'pubdate' => "%" . $date . "%"
        ]);

        $data = $request->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }
    public function getByProdDate($date)
    {
        $request = $this->db->prepare($this->base . "WHERE annee_prod = :proddate LIMIT 20");

        $request->execute([
            'proddate' => $date
        ]);

        $data = $request->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    public function getByGenre($genre)
    {
        $request = $this->db->prepare("SELECT * FROM genre_id WHERE  LIKE '%:genre%' LIMIT 20");

        $request->execute([
            'genre' => $genre
        ]);

        $data = $request->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }
}
