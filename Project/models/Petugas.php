<?php
class Petugas {
    private $conn;
    private $table = "petugas";

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

    public function insert($nama, $shift){
        $stmt = $this->conn->prepare("INSERT INTO {$this->table} (nama_petugas, shift) VALUES (?, ?)");
        return $stmt->execute([$nama, $shift]);
    }

    public function update($id, $nama, $shift){
        $stmt = $this->conn->prepare("UPDATE {$this->table} SET nama_petugas = ?, shift = ? WHERE id = ?");
        return $stmt->execute([$nama, $shift, $id]);
    }

    public function delete($id){
        $stmt = $this->conn->prepare("DELETE FROM {$this->table} WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
