<?php
class HomeController{
    public function home()
    {
        header("location:http://localhost/SI_SPP/index.php");
    }

    public function siswa()
    {
        header("location:http://localhost/SI_SPP/views/siswa/index.php");
    }
    public function pengguna()
    {
        header("location:http://localhost/SI_SPP/views/pengguna/index.php");
    }
  
}
