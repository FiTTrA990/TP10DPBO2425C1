<?php
require_once __DIR__ . '/../models/Anggota.php';
class AnggotaViewModel {
    private $model;
    public function __construct($db){ $this->model = new Anggota($db); }
    public function all(){ return $this->model->getAll(); }
    public function find($id){ return $this->model->getById($id); }
    public function save($data){
        if(!empty($data['id'])) {
            return $this->model->update($data['id'], $data['nama'], $data['alamat']);
        } else {
            return $this->model->insert($data['nama'], $data['alamat']);
        }
    }
    public function delete($id){ return $this->model->delete($id); }
}
