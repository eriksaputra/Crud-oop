<?php 
include '../databasebio.php';
$diri = new Diri();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widlabel=device-widlabel, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <title>Erick Saputa</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark">
  <a class="navbar-brand" href="#">DATADIRI</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
   aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
</li>
</ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</header>
<!-- end header -->
    <?php 
        foreach($diri->edit($_GET['id']) as $data)
        {
            $id = $data['id'];
            $nama = $data['nama'];
            $alamat = $data['alamat'];
            $tgl_lahir = $data['tanggal_lahir'];
            $jenis_kelamin = $data['jenis_kelamin'];
            $agama = $data['agama'];

        }
    ?>
    <div class="container">
        <div class="row justify-content-center" style="padding:20px;">
            <div class="col-md-10">
                <div class="card ">
                    <div class="card-header">
                    <center>
                    <h5>Data Diri</h5>
                    </center>
                     </div>
                    <div class="card-body">
        <form action="proses.php?aksi=update" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>">
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control" id="" cols="20" rows="10"  value=""><?php echo $alamat; ?></textarea>
              </div>
              </div>
              <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>">
           <div class="form-group">
            <label>Jenis Kelamin</label>
                  <input type="radio" class="radio-inline" name="jenis_kelamin" value="Laki-laki" checked/>Laki Laki 
                  <input type="radio" class="radio-inline" name="jenis_kelamin" value="Perempuan"/>Perempuan
            </div>
            <div class="form-group"> 
              <label>Agama</label>
              
                    <select name="agama" class="form-control">
                    <option value="islam">islam</option>
                    <option value="kristen">kristen</option>
                    <option value="hindu">hindu</option>
                    <option value="budha">budha</option>
                    </select>
            </div>
            <div class="form-group">
            <input type="submit" class="btn btn-outline-primary" name="save" value="Simpan">
            <input type="reset" class="btn btn-outline-warning" value="Reset">
          </div>
        </form>
    </div>
     </div>
      </div>
       </div>
        </div>
         </div>

    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>
