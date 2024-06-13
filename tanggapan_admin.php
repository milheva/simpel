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

                
            <!-- DataTales Example -->
         <div class="card shadow">
                <div class="card-header">
                Tanggapan
                </div>
            
                
                <div class="card-body">
                <a href="verifikasi_pengaduan_admin.php" class="btn btn-primary">
               Kembali
                </a>

            
                
                <form  method="post" action="simpan_tanggapan.php" enctype="multipart/form-data">
                    
                    <div>
                    ID Pengaduan
                    <input type="text" name="id_pengaduan" value="<?php echo $_GET['id']; ?>" class="form-control" readonly>
                    </div>

                    <div>
                    Tanggal Tanggapan
                    <input type="text" name="tgl_tanggapan" value="<?php echo date('Y-m-d'); ?>" class="form-control" readonly>
                    </div>

                    <div>
                    Tulis Tanggapan
                    <textarea class="form-control" rows="7" name="tanggapan">
                    </textarea>
                    </div>

                    <div>
                    <label>ID Petugas</label>
                    <input type="text" name="id_petugas" value="<?php echo $_SESSION['id_petugas'];?>" class="form-control"   readonly>
                    </div>  <br>

                    <input type="submit" class="btn btn-primary" value="Tanggapi!">

                    
                
                </form>
                </div>
            </div>



                              
 
</body>
</html>