<?php
require '../../index2.php';
include_once '../../config.php';
include_once '../../controllers/SiswaController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id_siswa'])) {
    $id_siswa = $_GET['id_siswa'];

    $siswaController = new SiswaController($db);
    $x = $siswaController->getSiswaById($id_siswa);

    if ($x) {
        if (isset($_POST['submit'])) {
            $nis = $_POST['nis'];
            $nama_siswa = $_POST['nama_siswa'];
            $nama_jurusan = $_POST['nama_jurusan'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $alamat = $_POST['alamat'];

            $result = $siswaController->updateSiswa($id_siswa, $nis, $nama_siswa, $nama_jurusan, $jenis_kelamin, $alamat);

            if ($result) {
                header("location:siswa");
            } else {
                header("location:editSiswa");
            }
        }
    } else {
        echo "Siswa Tidak Ditemukan!";
    }
}
?>

<body>
    <div class="card px-3 py-3" style="margin: 119px auto; padding: 20px; max-width:400px">
        <h3 class="text-center">Edit Data Siswa</h3>
        <?php
        ?>
        <form method="post" action="">
            <?php
            ?>
                <table>
                    <tr>
                        <td>NIS</td>
                        <td>
                            <input type="text" name="nis" value="<?php echo $x['nis'] ?>" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>
                            <input type="text" name="nama_siswa" value="<?php echo $x['nama_siswa'] ?>" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>
                            <input type="text" name="nama_jurusan" value="<?php echo $x['nama_jurusan'] ?>" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>
                            <input type="text" name="jenis_kelamin" value="<?php echo $x['jenis_kelamin'] ?>" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>
                            <input type="text" name="alamat" value="<?php echo $x['alamat'] ?>" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </td>
                    </tr>
                <?php
                ?>
                </table>
        </form>
        <?php
        
        ?>
    </div>

   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>