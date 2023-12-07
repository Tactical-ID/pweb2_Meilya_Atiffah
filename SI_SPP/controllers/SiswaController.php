<?php

include_once '../../models/Siswa.php';

class SiswaController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new Siswa($db);
    }

    public function getAllSiswa()
    {
        return $this->model->getAllSiswa();
    }

    public function createSiswa($nis, $nama_siswa, $nama_jurusan, $jenis_kelamin, $alamat)
    {
        return $this->model->createSiswa($nis, $nama_siswa, $nama_jurusan, $jenis_kelamin, $alamat);
    }

    public function getSiswaById($id_siswa)
    {
        return $this->model->getSiswaById($id_siswa);
    }

    public function updateSiswa($id_siswa, $nis, $nama_siswa, $nama_jurusan, $jenis_kelamin, $alamat)
    {
        return $this->model->updateSiswa($id_siswa, $nis, $nama_siswa, $nama_jurusan, $jenis_kelamin, $alamat);
    }

    public function deleteSiswa($id_siswa)
    {
        return $this->model->deleteSiswa($id_siswa);
    }
}
