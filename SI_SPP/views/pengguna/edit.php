<?php
require_once '../../index2.php';
include_once '../../config.php';
include_once '../../controllers/PenggunaController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id_pengguna'])) {
    $id_pengguna = $_GET['id_pengguna'];

    $penggunaController = new PenggunaController($db);
    $penggunaData = $penggunaController->getPenggunaById($id_pengguna);

    if ($penggunaData) {
        if (isset($_POST['submit'])) {
            $nama_pengguna = $_POST['nama_pengguna'];
            $hak_akses = $_POST['hak_akses'];
            $password = $_POST['password'];

            $result = $penggunaController->updatePengguna($id_pengguna, $nama_pengguna, $hak_akses, $password);

            if ($result) {
                header("location:pengguna");
            } else {
                header("location:editPengguna");
            }
        }
    } else {
        echo "Pengguna Tidak Ditemukan!";
    }
}
?>

<body>
    <div class="card px-3 py-3" style="margin: 119px auto; padding: 20px; max-width:400px">
        <h3 class="text-center">Edit Data Pengguna</h3>
        <?php
        // if ($busData) {
        ?>
        <form method="post" action="">
            <?php
            foreach ($penggunaData as $x) {
            ?>
                <table>
                    <tr>
                        <td>Nama Pengguna</td>
                        <td>
                            <input type="text" name="nama_pengguna" value="<?php echo $x['nama_pengguna'] ?>" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Hak Akses</td>
                        <td>
                            <input type="text" name="hak_akses" value="<?php echo $x['hak_akses'] ?>" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>
                            <input type="text" name="password" value="<?php echo $x['password'] ?>" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </td>
                    </tr>
                <?php
            }
                ?>
                </table>
        </form>
        <?php
        // }
        ?>
    </div>

   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>