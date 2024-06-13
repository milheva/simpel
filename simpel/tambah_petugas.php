<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
    <div class="row">
            <div class="col-md-2">
                <div class="list-group-flush">
                  <a href="admin.php" class="list-group-item list-group-item-action active text-center" >
                    PENGADUAN MASYARAKAT
                    </a>
                    <a href="verifikasi_pengaduan_admin.php" class="list-group-item list-group-item-action">
                      Verifikasi Pengaduan
                    </a>
                    <a href="data_petugas.php" class="list-group-item list-group-item-action">
                      Data Petugas
                    </a>
                    <a href="data_masyarakat.php" class="list-group-item list-group-item-action">
                      Data Masyarakat
                    </a>
                    <a href="data_laporan.php" class="list-group-item list-group-item-action">
                      Data Laporan
                    </a>
                    <a href="data_tanggapan.php" class="list-group-item list-group-item-action">
                      Data Tanggapan
                    </a>
                    <a href="logout.php" class="list-group-item list-group-item-action">
                      Keluar</a>  
                </div>
            </div>
            
            <div class="col-md-10">
           <h2>APLIKASI PENGADUAN MASYARAKAT</h2> 
           <br><br>

           <div class="card shadow">
    <div class="card-header">
      Tambah Petugas
    </div>
    <div class="card-body">
      <form action="simpan_petugas.php" method="post" class="form-horizontal" enctype="multipart/form-data">
        <div class="form-group cols-sm-6">
          <label>Nama Petugas</label>
          <input type="text" name="nama_petugas" value="" class="form-control" >
        </div>
        <div class="form-group cols-sm-6">
          <label>Username</label>
          <input type="text" name="username" value="" class="form-control" >
        </div>
        <div class="form-group cols-sm-6">
          <label>Password</label>
          <input type="text" name="password" value="" class="form-control" >
        </div>
        <div class="form-group cols-sm-6">
          <label>Telp</label>
          <input type="text" name="telp" value="" class="form-control" >
        </div>
        <div class="form-group cols-sm-6">
          <label>Level</label>
          <select class="form-control" name="level">
              <option>==pilih==</option>
              <option value="admin">Admin</option>
              <option value="petugas">Petugas</option>
          </select>
        </div><br>
        
        <div class="form-group col-sm-6">
          <input type="submit" value="Simpan" class="btn btn-primary">
          <input type="reset" value="Kosongkan" class="btn btn-warning">
        </div>
        
      </form>

</body>
</html>