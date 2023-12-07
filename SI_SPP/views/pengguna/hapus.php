<?php

include_once '../../config.php';
include_once '../../controllers/PenggunaController.php';

$database = new database();
$db = $database->getKoneksi();

if(isset($_GET['id_pengguna'])){
    $id_pengguna=$_GET['id_pengguna'];

    $penggunaController=new PenggunaController($db);
    $result=$penggunaController->deletePengguna($id_pengguna);

    if($result){
        header("location:pengguna");
    } else{
        echo "Gagal menghapus data";
    }
}