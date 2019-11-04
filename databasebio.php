<?php 
class Database {
    public $host = "localhost", $user = "root", $pass = 123, $db="XIRPL2";
    public $koneksi;
    public function __construct()
    {
        $this->koneksi = mysqli_connect
        ($this->host, $this->user, $this->pass, $this->db);
        if($this->koneksi)
        {
            // echo "berhasil";
        } else {
            return "Koneksi Database Gagal";
        }
    }
}
include 'diri.php';
// koneksi database
$db = new Database();
?>