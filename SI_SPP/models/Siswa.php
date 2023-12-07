<?php

class Siswa
{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function getAllSiswa()
    {
        $query = "SELECT * FROM siswa";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createSiswa($nis,$nama_siswa,$nama_jurusan,$jenis_kelamin,$alamat){
        $query="INSERT INTO siswa (nis,nama_siswa,nama_jurusan,jenis_kelamin,alamat) 
        VALUES('$nis','$nama_siswa','$nama_jurusan','$jenis_kelamin','$alamat')";
        $result = mysqli_query($this->koneksi, $query);
        IF($result){
            return true;
        } else {
            return false;
        }

    }

    public function getSiswaById($id_siswa){
        $query = "SELECT * FROM siswa where id_siswa= $id_siswa";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updateSiswa($id_siswa, $nis, $nama_siswa, $nama_jurusan, $jenis_kelamin, $alamat){
        $query="UPDATE siswa set nis='$nis', nama_siswa='$nama_siswa', nama_jurusan='$nama_jurusan', jenis_kelamin='$jenis_kelamin', alamat='$alamat' where id_siswa='$id_siswa'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        } else {
            return false;
        }
    }

    public function deleteSiswa($id_siswa){
        $query = "DELETE FROM siswa WHERE id_siswa=$id_siswa";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        } else {
            return false;
        }
    }
}