<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
  <div class="row">
            <div class="col-md-2">
                <div class="list-group-flush">
                  <a href="masyarakat.php" class="list-group-item list-group-item-action active text-center">
                    PENGADUAN MASYARAKAT                    
                  </a>
                    <a href="tulis_pengaduan.php" class="list-group-item list-group-item-action">
                      Tulis Pengaduan
                    </a>
                    <a href="lihat_Pengaduan.php" class="list-group-item list-group-item-action">  
                    Lihat Pengaduan</a>  
                    <a href="logout.php" class="list-group-item list-group-item-action">  
                    Keluar</a>  
                </div>
            </div>
            
            <div class="col-md-10">
           <h2>APLIKASI PENGADUAN MASYARAKAT</h2> 
           <br><br>

            <div class="card shadow">
            <div class="card-header">
              Tulis Pengaduan
            </div>
            <div class="card-body">
              <form method="post" action="simpan_pengaduan.php"  enctype="multipart/form-data">

                <div>
                  Tanggal Pengaduan
                  <input type="text" name="tgl_pengaduan" value="<?php echo date('d/m/Y'); ?>" class="form-control" readonly>
                </div>

                <div>
                  NIK
                  <input type="text" name="nik" class="form-control" value="<?php echo $_SESSION['nik'];?>" readonly>
                </div>

                <div>
                  Tulis Laporan
                  <textarea class="form-control" rows="7" name="isi_laporan"></textarea>
                </div>

                <div>
                  Unggah Foto
                  <input type="file" name="foto" class="form-control" accept=".jpg, .jpeg, .png, .gif"><font color="red"> *tipe yang bisa di upload adalah : .jpg, .jpeg, .png, .gif</font>
                </div>

                <div>
                  <input type="submit" value="Simpan" class="btn btn-primary">
                  <input type="reset" value="Kosongkan" class="btn btn-warning">
                </div>
                
              </form>

                              
 
</body>
</html>