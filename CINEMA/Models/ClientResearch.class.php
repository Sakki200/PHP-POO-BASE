<?php

class Client extends Database
{

    public function getAll()
    {
        $request = $this->db->prepare("SELECT * FROM detail");

        $request->execute();

        $data = $request->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    public function getByName($name)
    {
        $request = $this->db->prepare("SELECT * FROM detail WHERE nom LIKE :nom");

        $request->execute([
            'nom' => "%" . $name . "%"
        ]);

        $data = $request->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }
    public function getByFirstName($name)
    {
        $request = $this->db->prepare("SELECT * FROM detail WHERE prenom LIKE :prenom");

        $request->execute([
            'prenom' => "%" . $name . "%"
        ]);

        $data = $request->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }
}
