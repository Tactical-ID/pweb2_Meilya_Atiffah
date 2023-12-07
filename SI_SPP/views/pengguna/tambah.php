<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/PenggunaController.php';
require '../../index2.php';
?>


<body>
    <div class="card px-3 py-3" style="margin: 25px auto; padding: 20px; max-width:400px">
        <h3 class="text-center">Tambah Data Pengguna</h3>
        <form action="proses_tambahPengguna" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama_pengguna" class="form-control"></td>
                </tr>
                <tr>
                    <td>Hak Akses</td>
                    <td>
                        <select name="hak_akses" class="form-control">
                            <optgroup label="Pilih Hak Akses">

                                <option value="Admin">Admin</option>
                                <option value="Siswa">Siswa</option>
                            </optgroup>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="text" name="password" class="form-control"></td>
                </tr>

                <td>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    
                </td>
                <td>
                    <a href="pengguna" class="btn btn-primary">Kembali</a>
                </td>
                
            </table>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>