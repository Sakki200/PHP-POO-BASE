<?php

class Genre extends Database {
    public function getAll() {
        $request = $this->db->prepare("SELECT * FROM genre ORDER BY nom");

        $request->execute();

        $data = $request->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }
}