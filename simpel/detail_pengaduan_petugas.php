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
                  <a href="petugas.php" class="list-group-item list-group-item-action active text-center" >
                    PENGADUAN MASYARAKAT
                   </a>
                    <a href="verifikasi_pengaduan_petugas.php" class="list-group-item list-group-item-action">
                      Verifikasi Pengaduan
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
            Detail Pengaduan
          </div>
          <?php 
                $koneksi = mysqli_connect("localhost","root","","simpel") or die (mysqli_connect_error());
                $sql=mysqli_query($koneksi,"SELECT * from pengaduan where id_pengaduan='$_GET[id]'");
                $data=mysqli_fetch_array($sql);
                if ($sql) 
                {
                ?>
                
                  <div class="card-body">
                  <div>
                  <a href="verifikasi_pengaduan_petugas.php" class="btn btn-primary">
                  Kembali
                  </a>

                  <a href="proses.php?id=<?php echo $data['id_pengaduan']; ?>" class="btn btn-danger btn-icon-split" onclick="return confirm('yakin akan diproses?')">
                 Proses Verifikasi
                  </a>
                  </div>
                  
          
                  <form action="" method="post" enctype="multipart/form-data">
                      
                      
                      <div>
                      Tanggal Pengaduan
                      <input type="text" name="tgl_pengaduan" value="<?php echo $data['tgl_pengaduan']; ?>" class="form-control" readonly>
                      </div>

                      <div>
                      <label>Tulis Laporan</label>
                      <textarea class="form-control" rows="7" name="isi_laporan" readonly="">
                          <?php echo $data['isi_laporan']; ?>

                      </textarea>
                      </div>

                      <div>
                      <label>Bukti Foto</label>
                      <div>
                      <img src="gambar/<?php echo $data['foto']; ?>" width=800>
                      </div>
                      </div>

                      
                      <?php } ?>
                  </form>
                  </div>
              </div>



                              
 
</body>
</html>