<?php 
include '../databasebio.php';
$diri = new Diri();
$aksi = $_GET['aksi'];
if(isset($_POST['save']))
{
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $tgl= date('Y', strtotime($tgl_lahir));
    $umur= date('Y')-$tgl;
    

}
if($aksi == "tambah")
{
    $diri->create($nama, $alamat, $tgl_lahir, $jenis_kelamin, $agama, $umur);
    header("location:index.php");
}
elseif($aksi == "update")
{
    $diri->update($id, $nama, $alamat, $tgl_lahir, $jenis_kelamin, $agama, $umur);
    header("location:index.php");
}
elseif($aksi == "delete")
{
    $diri->delete($_GET['id']);
    header("location:index.php");
}

?>
