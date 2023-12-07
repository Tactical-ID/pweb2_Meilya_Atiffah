<?php
//memanggil class model database

include_once '../../config.php';
include_once '../../controllers/SiswaController.php';
require '../../index.php'; 

//instansiasi class database
$database=new database;
$db = $database->getKoneksi();

$siswaController = new siswaController($db);
$siswa= $siswaController->getAllSiswa();
?>

  
    
<div class = "px-5">
<h3>Data Siswa</h3>
<a class="btn btn-primary mb-3 mt-2" href="tambahSiswa">Tambah Siswa</a>
<table class="table table-striped" style="width:100%">
<tr>
    <th>No</th>
    <th>NIS</th>
    <th>Nama</th>
    <th>Jurusan</th>
    <th>Jenis Kelamin</th>
    <th>Alamat</th>
    <th>Aksi</th>
</tr>
<?php

$no=1;
foreach($siswa as $x)
{
    ?>
    <tr>
        <td><?php echo$no++ ?></td>
        <td><?php echo$x ['nis'] ?></td>
        <td><?php echo$x ['nama_siswa'] ?></td>
        <td><?php echo$x ['nama_jurusan'] ?></td>
        <td><?php echo$x ['jenis_kelamin'] ?></td>
        <td><?php echo$x ['alamat'] ?></td>
        <td>
            <a class="btn btn-warning" href="editSiswa?id_siswa=<?php echo $x['id_siswa']; ?>">Edit</a>
            <a class="btn btn-danger" href="hapusSiswa?id_siswa=<?php echo $x['id_siswa']; ?>"onclick="return confirm('Apakah yakin akan menghapus..?')">Hapus</a>
        </td>
    </tr>
    <?php
    
}
?>
</table>
</div>
</div>