<?php

include_once '../../config.php';
include_once '../../controllers/SiswaController.php';

$database = new database();
$db = $database->getKoneksi();

if(isset($_GET['id_siswa'])){
    $id_siswa=$_GET['id_siswa'];

    $siswaController=new SiswaController($db);
    $result=$siswaController->deleteSiswa($id_siswa);

    if($result){
        header("location:siswa");
    } else{
        echo "Gagal menghapus data";
    }
}