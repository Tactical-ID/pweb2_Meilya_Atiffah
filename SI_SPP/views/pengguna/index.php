<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/PenggunaController.php';
require '../../index.php'; 
//instansiasi class database
$database=new database;
$db = $database->getKoneksi();

$penggunaController = new penggunaController($db);
$pengguna= $penggunaController->getAllPengguna();
?>

  
    
<div class = "px-5">
<h3>Data Pengguna</h3>
<a class="btn btn-primary mb-3 mt-2" href="tambahPengguna">Tambah Pengguna</a>
<table class="table table-striped" style="width:100%">
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Hak Akses</th>
    <th>Password</th>
    <th>Aksi</th>
</tr>
<?php
$no=1;
foreach($pengguna as $x)
{
    ?>
    <tr>
        <td><?php echo$no++ ?></td>
        <td><?php echo$x ['nama_pengguna'] ?></td>
        <td><?php echo$x ['hak_akses'] ?></td>
        <td><?php echo$x ['password'] ?></td>
        <td>
            <a class="btn btn-warning" href="editPengguna?id_pengguna=<?php echo $x['id_pengguna']; ?>">Edit</a>
            <a class="btn btn-danger" href="hapusPengguna?id_pengguna=<?php echo $x['id_pengguna']; ?>"onclick="return confirm('Apakah yakin akan menghapus..?')">Hapus</a>
        </td>
    </tr>
    <?php
}
?>
</table>
</div>
</div>