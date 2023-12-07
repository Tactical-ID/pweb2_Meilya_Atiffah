<?php

include_once '../../config.php';
include_once '../../controllers/PenggunaController.php';

$database = new database();
$db=$database->getKoneksi();

if(isset($_POST['submit'])){
    $nama_pengguna = $_POST['nama_pengguna'];
    $hak_akses = $_POST['hak_akses'];
    $password = $_POST['password'];
    

    $penggunaController = new PenggunaController($db);
    $result = $penggunaController->createPengguna($nama_pengguna, $hak_akses, $password);

    if($result){
        header("location:pengguna");
    }else{
        header("location:tambah.php");
    }
}

