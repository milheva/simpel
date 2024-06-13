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
           
           <div class="card shadow">
            <div class="card-header">
            Detail Pengaduan
            </div>
            <div class="card-body">     
            <a href="verifikasi_pengaduan_admin.php" class="btn btn-primary">
            Kembali
            </a>
            
            <form action="" method="post"  enctype="multipart/form-data">
                <?php 
                $koneksi = mysqli_connect("localhost","root","","simpel") or die (mysqli_connect_error());
                $sql=mysqli_query($koneksi,"SELECT * from pengaduan where id_pengaduan='$_GET[id]'");
                $data=mysqli_fetch_array($sql);
                if ($sql) 
                {
                  ?>
                <div class="form-group cols-sm-6">
                <label>Tanggal Pengaduan</label>
                <input type="text" name="tgl_pengaduan" value="<?php echo $data['tgl_pengaduan']; ?>" class="form-control" readonly>
                </div>

                <div class="form-group cols-sm-6">
                <label>Tulis Laporan</label>
                <textarea class="form-control" rows="7" name="isi_laporan" readonly="">
                    <?php echo $data['isi_laporan']; ?>

                </textarea>
                </div>
                <div class="form-group cols-sm-6">
                <label>Bukti Foto</label>
                <div>
                <img src="gambar/<?php echo $data['foto']; ?>" width=800>
                </div>
                  </div>

                
                <?php } ?>
            </form>
                </div>
            </div>
        </div>


                              
 
</body>
</html>