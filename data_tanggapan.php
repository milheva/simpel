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

           <!-- DataTales Example -->
          <div class="card shadow">
            <div class="card-header">
              Data Tanggapan
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>ID Tanggapan</th>
                      <th>ID Pengaduan</th>
                      <th>Tgl Tanggapan</th>
                      <th>Tanggapan</th>
                      <th>ID Petugas</th>
                      <th>Aksi</th>
                    </tr>

                  </thead>
                </tfoot>
                  <?php
                  $koneksi = mysqli_connect("localhost","root","","simpel") or die (mysqli_connect_error());
                  $sql=mysqli_query($koneksi,"SELECT * from tanggapan");
                  while ($data=mysqli_fetch_array($sql)) {
                
                  ?>
                  <tbody>
                    <tr>
                        <td><?php echo $data['id_tanggapan']; ?></td>
                        <td><?php echo $data['id_pengaduan']; ?></td>
                        <td><?php echo $data['tgl_tanggapan']; ?></td>
                        <td><?php echo $data['tanggapan']; ?></td>
                        <td><?php echo $data['id_petugas']; ?></td>
                        
                    <td>
                    <!--button-->
                    <a href="edit_tanggapan.php?id=<?php echo $data['id_tanggapan']; ?>" class="btn btn-primary">Edit
                       
                    </a>

                    <a href="hapus_tanggapan.php?id=<?php echo $data['id_tanggapan']; ?>" class="btn btn-danger btn-circle" onclick= "return confirm('Yakin Mau Hapus?')">Hapus
                       
                    </a>
                    
                    </td>
                    </tr>
                  
                <?php } ?>
                  </table>
              </div>
            </div>
          </div>
  
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
</body>
</html>