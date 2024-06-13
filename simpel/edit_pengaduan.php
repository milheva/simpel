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
                Edit Data Petugas
                </div>
                <div class="card-body">

                <?php
                $koneksi = mysqli_connect("localhost","root","","simpel") or die (mysqli_connect_error());
                $sql=mysqli_query($koneksi,"select * from pengaduan where id_pengaduan='$_GET[id]' ");
                if($data=mysqli_fetch_array($sql))
                {
                    ?>
                <form action="proses_simpan_pengaduan.php" method="post" enctype="multipart/form-data">
                    <div>
                    <label>ID Pengaduan</label>
                    <input type="text" name="id_pengaduan" value="<?php echo $data['id_pengaduan']; ?>" class="form-control" readonly>
                    </div>
                    <div>
                    <label>Tanggal Pengaduan</label>
                    <input type="text" name="tgl_pengaduan" value="<?php echo date('d/m/y')?>" class="form-control" readonly>
                    </div>
                    <div>
                    <label>NIK</label>
                    <input type="text" name="nik" value="<?php echo $data['nik']; ?>" class="form-control" readonly>
                    </div>
                    <div>
                    <label>Isi Laporan</label>
                    <input type="text" name="isi_laporan" value="<?php echo $data['isi_laporan']; ?>" class="form-control" >
                    </div>
                    <div>
                    <label>Foto</label>
                    <input type="text" name="foto" value="<?php echo $data['foto']; ?>" class="form-control" readonly>
                    </div><br>
                   
                    
                    <div>
                    <input type="submit" value="Simpan" class="btn btn-primary">
                    <input type="reset" value="Kosongkan" class="btn btn-warning">
                    </div>
                    
                </form>
                <?php } ?>
</div>


                              
 
</body>
</html>