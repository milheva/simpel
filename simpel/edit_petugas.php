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
                Edit Data Petugas
                </div>
                <div class="card-body">

                <?php
                $koneksi = mysqli_connect("localhost","root","","simpel") or die (mysqli_connect_error());
                $sql=mysqli_query($koneksi,"select * from petugas where id_petugas='$_GET[id]' ");
                if($data=mysqli_fetch_array($sql))
                {
                    ?>
                <form method="post" action="proses_simpan_petugas.php"  enctype="multipart/form-data">
                    <div>
                    ID Petugas
                    <input type="text" name="id_petugas" value="<?php echo $data['id_petugas']; ?>" class="form-control" readonly>
                    </div>

                    <div>
                    Nama Petugas
                    <input type="text" name="nama_petugas" value="<?php echo $data['nama_petugas']; ?>" class="form-control" >
                    </div>

                    <div>
                    Username
                    <input type="text" name="username" value="<?php echo $data['username']; ?>" class="form-control" >
                    </div>

                    <div>
                    Password
                    <input type="text" name="password" value="<?php echo $data['password']; ?>" class="form-control" >
                    </div>

                    <div>
                    Telp
                    <input type="text" name="telp" value="<?php echo $data['telp']; ?>" class="form-control" >
                    </div>

                    <div>
                    Level
                    <select class="form-control" name="level">
                        <option value="<?php echo $data['level']; ?>"><?php echo $data['level']; ?></option>
                        <option value="admin">Admin</option>
                        <option value="petugas">Petugas</option>
                    </select>
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