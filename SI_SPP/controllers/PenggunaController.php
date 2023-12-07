<?php

include_once '../../models/Pengguna.php';

class PenggunaController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new Pengguna($db);
    }

    public function getAllPengguna()
    {
        return $this->model->getAllPengguna();
    }

    public function createPengguna($nama_pengguna, $hak_akses, $password)
    {
        return $this->model->createPengguna($nama_pengguna, $hak_akses, $password);
    }

    public function getPenggunaById($id_pengguna)
    {
        return $this->model->getPenggunaById($id_pengguna);
    }

    public function updatePengguna($id_pengguna, $nama_pengguna, $hak_akses, $password)
    {
        return $this->model->updatePengguna($id_pengguna, $nama_pengguna, $hak_akses, $password);

    }

    public function deletePengguna($id_pengguna){
        return $this->model->deletePengguna($id_pengguna);
    }
}
