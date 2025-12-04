<?php
require_once __DIR__ . '/../models/Petugas.php';
class PetugasViewModel {
    private $model;
    public function __construct($db){ $this->model = new Petugas($db); }
    public function all(){ return $this->model->getAll(); }
    public function find($id){ return $this->model->getById($id); }
    public function save($data){
        if(!empty($data['id'])) {
            return $this->model->update($data['id'], $data['nama'], $data['shift']);
        } else {
            return $this->model->insert($data['nama'], $data['shift']);
        }
    }
    public function delete($id){ return $this->model->delete($id); }
}
