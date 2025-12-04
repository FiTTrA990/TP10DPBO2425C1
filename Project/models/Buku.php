<?php
class Buku {
    private $conn;
    private $table = "buku";

    public function __construct($db){
        $this->conn = $db;
    }

    public function getAll(){
        $stmt = $this->conn->query("SELECT * FROM {$this->table} ORDER BY id DESC");
        return $stmt->fetchAll();
    }

    public function getById($id){
        $stmt = $this->conn->prepare("SELECT * FROM {$this->table} WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function insert($judul, $pengarang){
        $stmt = $this->conn->prepare("INSERT INTO {$this->table} (judul_buku, pengarang) VALUES (?, ?)");
        return $stmt->execute([$judul, $pengarang]);
    }

    public function update($id, $judul, $pengarang){
        $stmt = $this->conn->prepare("UPDATE {$this->table} SET judul_buku = ?, pengarang = ? WHERE id = ?");
        return $stmt->execute([$judul, $pengarang, $id]);
    }

    public function delete($id){
        $stmt = $this->conn->prepare("DELETE FROM {$this->table} WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
