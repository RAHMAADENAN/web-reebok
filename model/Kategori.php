<?php
// webreebok/model/Kategori.php

require_once __DIR__ . '/../config/Database.php';

class Kategori {
    private $db;

    public function __construct() {
        $this->db = (new Database())->getConnection();
    }

    public function getAll() {
        $query = "SELECT * FROM kategori ORDER BY id DESC";
        $stmt = $this->db->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function store($nama) {
        $query = "INSERT INTO kategori (nama_kategori) VALUES (?)";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([$nama]);
    }

    public function delete($id) {
        $query = "DELETE FROM kategori WHERE id = ?";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([$id]);
    }
}
?>