<?php 

include '../database.php';
$db = new Database();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
     <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css"/>
    <title>Crud - Biodata Diri</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">DATA SISWA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php.php">Home <span class="sr-only">(current)</span></a>
</li>
      
    </ul>
    <div class="my-2 my-lg-0" >
        <a class="btn btn-outline-success my-2 my-sm-0" role="button" href="/tugas/create.php">Input Data Diri</a>
    </div>
  </div>
</nav>
</header>
<!-- end header -->
    <div class="container">
        <div class="row justify-content-center" style="padding:20px;">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                    <center>
                    <h5>Data Diri</h5>
                    </center>
                     </div>
                    <div class="card-body">
    <table class="table" id="e">
    <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
</thead>
        
<tbody>
    <?php
            $diri = new Siswa();
            $no = 1;
            foreach($diri->index() as $data) {
        ?>
            <tr>
                 <td><?php echo $no++; ?></td>
                 <td><?php echo $data['nis']; ?></td>
                 <td><?php echo $data['nama']; ?></td>
                 <td><?php echo $data['alamat']; ?></td>
            <td><a class="btn btn-outline-primary" role="button" href="show.php?id=<?php echo $data['id']; ?>&aksi=show">Show</a>
            <a class="btn btn-outline-warning" role="button" href="edit.php?id=<?php echo $data['id']; ?>&aksi=edit">Edit</a>
            <a class="btn btn-outline-danger" role="button" href="proses.php?id=<?php echo $data['id']; ?>&aksi=delete" onclick="return confirm('Apa anda yakin akan menghapus data?')">Delete</a></td>
        </tr>
        <?php }?>
</tbody>        
    </table>

    </div>
     </div>
      </div>
       </div>
        </div>
         </div>   
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-3.3.1.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script> 
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>
</body>
<script>
$(document).ready(function() {
    $('#e').DataTable();
} );
</script>
</html>
