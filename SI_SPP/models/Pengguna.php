<?php

class Pengguna
{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function getAllPengguna()
    {
        $query = "SELECT * FROM pengguna";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createPengguna($nama_pengguna,$hak_akses,$password)
    {
        $query = "INSERT INTO pengguna (nama_pengguna,hak_akses,password) 
        VALUES('$nama_pengguna','$hak_akses','$password')";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getPenggunaById($id_pengguna)
    {
        $query = "SELECT * FROM pengguna where id_pengguna= $id_pengguna";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function updatePengguna($id_pengguna, $nama_pengguna, $hak_akses, $password)
    {
        $query = "UPDATE pengguna set nama_pengguna='$nama_pengguna', hak_akses='$hak_akses', password='$password' where id_pengguna='$id_pengguna'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deletePengguna($id_pengguna)
    {
        $query = "DELETE FROM pengguna WHERE id_pengguna=$id_pengguna";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
