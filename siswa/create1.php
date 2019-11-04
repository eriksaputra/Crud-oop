<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <title>Document</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">BIODATA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    </div>
  </div>
</nav>
</header>
<!-- end header -->

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
       <form action="proses.php?aksi=tambah"method="post">
         <div class="form-group">
              <label>Nama</label>
              <input type="text" name="nama" class="form-control" required>
         </div>
              
           
         <div class="form-group">
               <label>Alamat</label>
                <textarea name="alamat" class="form-control" id="" cols="20" rows="5"></textarea>
         </div>
              
           
         <div class="form-group">
              <label>Tanggal Lahir</label><input type="date" name="tgl_lahir" class="form-control">
         </div>
           
   
         <div class="form-group">
               <label>Jenis Kelamin</label></label>&nbsp; &nbsp;
         <div class="custom-control custom-radio custom-control-inline">
               <input type="radio" id="customRadioInline1" name="jenis_kelamin" value="Pria" class="custom-control-input">
                  <label class="custom-control-label" for="customRadioInline1">Laki-laki</label>
         </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="form-check form-check-inline custom-radio">
                    <input class="custom-control-input" id="customRadioInline2" type="radio" name="jenis_kelamin"  value="Wanita">
                     <label class="custom-control-label" for="customRadioInline2">Perempuan</label>
                      </div>
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
       <hr>
       <div class="col-md-12">
         <input type="submit" name="save" value="Simpan" class="form-control btn-primary">
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
