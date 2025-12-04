<?php
class Anggota {
    private $conn;
    private $table = "anggota";

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

    public function insert($nama, $alamat){
        $stmt = $this->conn->prepare("INSERT INTO {$this->table} (nama_anggota, alamat) VALUES (?, ?)");
        return $stmt->execute([$nama, $alamat]);
    }

    public function update($id, $nama, $alamat){
        $stmt = $this->conn->prepare("UPDATE {$this->table} SET nama_anggota = ?, alamat = ? WHERE id = ?");
        return $stmt->execute([$nama, $alamat, $id]);
    }

    public function delete($id){
        $stmt = $this->conn->prepare("DELETE FROM {$this->table} WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
