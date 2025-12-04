<?php
class Peminjaman {
    private $conn;
    private $table = "peminjaman";

    public function __construct($db){
        $this->conn = $db;
    }

    public function getAll(){
        $sql = "SELECT p.id, b.judul_buku, a.nama_anggota, pt.nama_petugas, p.jumlah_pinjam
                FROM peminjaman p
                JOIN buku b ON p.id_buku = b.id
                JOIN anggota a ON p.id_anggota = a.id
                JOIN petugas pt ON p.id_petugas = pt.id
                ORDER BY p.id DESC";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll();
    }

    public function getById($id){
        $stmt = $this->conn->prepare("SELECT * FROM {$this->table} WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function insert($id_buku, $id_anggota, $id_petugas, $jumlah){
        $stmt = $this->conn->prepare("INSERT INTO {$this->table} (id_buku, id_anggota, id_petugas, jumlah_pinjam) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$id_buku, $id_anggota, $id_petugas, $jumlah]);
    }

    public function update($id, $id_buku, $id_anggota, $id_petugas, $jumlah){
        $stmt = $this->conn->prepare("UPDATE {$this->table} SET id_buku = ?, id_anggota = ?, id_petugas = ?, jumlah_pinjam = ? WHERE id = ?");
        return $stmt->execute([$id_buku, $id_anggota, $id_petugas, $jumlah, $id]);
    }

    public function delete($id){
        $stmt = $this->conn->prepare("DELETE FROM {$this->table} WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
