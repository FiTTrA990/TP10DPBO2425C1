<?php
require_once __DIR__ . '/../models/Peminjaman.php';
require_once __DIR__ . '/../models/Buku.php';
require_once __DIR__ . '/../models/Anggota.php';
require_once __DIR__ . '/../models/Petugas.php';

class PeminjamanViewModel {
    private $model;
    private $bukuM;
    private $anggotaM;
    private $petugasM;

    public function __construct($db){
        $this->model = new Peminjaman($db);
        $this->bukuM = new Buku($db);
        $this->anggotaM = new Anggota($db);
        $this->petugasM = new Petugas($db);
    }

    public function all(){ return $this->model->getAll(); }
    public function find($id){ return $this->model->getById($id); }
    public function getOptions(){
        return [
            'buku' => $this->bukuM->getAll(),
            'anggota' => $this->anggotaM->getAll(),
            'petugas' => $this->petugasM->getAll()
        ];
    }
    public function save($data){
        if(!empty($data['id'])) {
            return $this->model->update($data['id'], $data['id_buku'], $data['id_anggota'], $data['id_petugas'], $data['jumlah']);
        } else {
            return $this->model->insert($data['id_buku'], $data['id_anggota'], $data['id_petugas'], $data['jumlah']);
        }
    }
    public function delete($id){ return $this->model->delete($id); }
}
