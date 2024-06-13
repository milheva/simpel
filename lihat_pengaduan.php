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
                  <a href="masyarakat.php" class="list-group-item list-group-item-action active text-center" >
                    PENGADUAN MASYARAKAT
                   </a>
                    <a href="tulis_pengaduan.php" class="list-group-item list-group-item-action">
                       Tulis Pengaduan
                    </a>
                    <a href="lihat_pengaduan.php" class="list-group-item list-group-item-action">
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
              Data Pengaduan
            </div>
            <div class="card-body">
              
                <table class="table table-bordered">
                  
                    <tr>
                      <th>ID</th>
                      <th>Tanggal</th>
                      <th>NIK</th>
                      <th>Isi Laporan</th>
                      <th>Foto</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>

                  
                  <?php
                  include "koneksi.php";
                	$koneksi = mysqli_query($koneksi,"SELECT * FROM pengaduan");
                  while($data = mysqli_fetch_array($koneksi)) {
                
                  ?>
                  
                    <tr>
                    <td><?php echo $data['id_pengaduan']; ?></td>
                    <td><?php echo $data['tgl_pengaduan']; ?></td>
                    <td><?php echo $data['nik']; ?></td>
                    <td><?php echo $data['isi_laporan']; ?></td>
                    <td><?php echo $data['foto']; ?></td>
                    <td><?php echo $data['status']; ?></td>
                    <td>
                    <!--button-->
                            <a href="detail_pengaduan.php?id=<?php echo $data['id_pengaduan']; ?>" class="btn btn-info">           
                            Detail
                            </a><br><br>

                            <a href="lihat_tanggapan.php?id=<?php echo $data['id_pengaduan']; ?>" class="btn btn-primary">                            
                            Tanggapan
                            </a><br><br>

                            <a href="edit_pengaduan.php?id=<?php echo $data['id_pengaduan']; ?>" class="btn btn-warning">                            
                            Edit
                            </a><br><br>

                            <a href="hapus_pengaduan.php?id=<?php echo $data['id_pengaduan']; ?>" class="btn btn-danger">                            
                            Hapus
                            </a><br>  

                            
                    </td>

                    </tr>
                  
                <?php } ?>

                  </table>
           </div>


                              
 
</body>
</html>