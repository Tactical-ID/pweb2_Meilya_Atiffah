<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/SiswaController.php';
require '../../index2.php';
?>

<body>
    <div class="card px-3 py-3" style="margin: 25px auto; padding: 20px; max-width:400px">
        <h3 class="text-center">Tambah Data Siswa</h3>
        <form action="proses_tambahSiswa" method="post">
            <table>
                <tr>
                    <td>NIS</td>
                    <td><input type="text" name="nis" class="form-control"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama_siswa" class="form-control"></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td><input type="text" name="nama_jurusan" class="form-control"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><input type="text" name="jenis_kelamin" class="form-control"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>
                        <textarea name="alamat" class="form-control" cols="30" rows="5"></textarea>
                    </td>
                </tr>
                <td>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    
                </td>
                <td>
                    <a href="siswa" class="btn btn-primary">Kembali</a>
                </td>
                </tr>
            </table>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>