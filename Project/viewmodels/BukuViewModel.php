<?php
require_once __DIR__ . '/../models/Buku.php';
class BukuViewModel {
    private $model;
    public function __construct($db){ $this->model = new Buku($db); }
    public function all(){ return $this->model->getAll(); }
    public function find($id){ return $this->model->getById($id); }
    public function save($data){
        if(!empty($data['id'])) {
            return $this->model->update($data['id'], $data['judul'], $data['pengarang']);
        } else {
            return $this->model->insert($data['judul'], $data['pengarang']);
        }
    }
    public function delete($id){ return $this->model->delete($id); }
}
