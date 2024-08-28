<?php

class Employes extends Database {

    public function getAll() {
        $request = $this->db->prepare("SELECT * FROM employes");

        $request->execute();

        $data = $request->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    public function getByGender($gender) {
        $request = $this->db->prepare("SELECT * FROM employes WHERE sexe = :gender");

        $request->execute([
            'gender' => $gender
        ]);

        $data = $request->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    public function getRiche() {
        $request = $this->db->prepare("SELECT * FROM employes WHERE salaire > 2000");

        $request->execute();

        $data = $request->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }
}