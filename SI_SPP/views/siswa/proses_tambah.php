<?php

include_once '../../config.php';
include_once '../../controllers/SiswaController.php';

$database = new database();
$db=$database->getKoneksi();

if(isset($_POST['submit'])){
    $nis = $_POST['nis'];
    $nama_siswa = $_POST['nama_siswa'];
    $nama_jurusan = $_POST['nama_jurusan'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];

    $siswaController = new SiswaController($db);
    $result = $siswaController->createSiswa($nis, $nama_siswa, $nama_jurusan, $jenis_kelamin, $alamat);

    if($result){
        header("location:siswa");
    }else{
        header("location:tambah.php");
    }
}

