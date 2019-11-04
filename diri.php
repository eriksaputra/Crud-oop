<?php
class Diri extends Database {
    // Menampilkan Semua Data
    public function index()
    {
        
        $data1 = mysqli_query($this->koneksi,"select * from data");
        // var_dump($datadata1);
        return $data1;
    }
    // Menambah Data
    public function create($nama, $alamat, $tanggal_lahir, $jenis_kelamin, $agama, $umur)
    {
        
        mysqli_query($this->koneksi,"insert into data values('$nama','$alamat', '$tanggal_lahir', '$jenis_kelamin', '$agama', '$umur')");
    }
    // Menampilkan Data Berdasarkan id
    public function show($id)
    {
        $data1 = mysqli_query($this->koneksi,"select * from data where id='$id'");
        return $data1;
    }
    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $data1 = mysqli_query($this->koneksi,"select * from data where id='$id'");
        return $data1;
    }
    // mengupdate data berdasarkan id
    public function update($id, $nama, $alamat, $tanggal_lahir, $jenis_kelamin, $agama, $umur)
    {
        $data1 = mysqli_query($this->koneksi,
        "update data set nama='$nama',alamat='$alamat', tgl_lahir='$tanggal_lahir',jenis_kelamin='$jenis_kelamin', agama ='$agama', umur ='$umur'  WHERE id='$id'");
        return $data1;
    }
    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi,"delete from data where id='$id'");
    }
}