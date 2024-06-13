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
            Detail Pengaduan
            </div>
            <div class="card-body">
            <div>
            <a href="lihat_pengaduan.php" class="btn btn-primary">
            Kembali
            </a>
            </div>
            
            <form action="" method="post" enctype="multipart/form-data">
                <?php 
                $koneksi = mysqli_connect("localhost","root","","simpel") or die (mysqli_connect_error());

                $sql=mysqli_query($koneksi,"select * from pengaduan, tanggapan where tanggapan.id_pengaduan='$_GET[id]' and tanggapan.id_pengaduan=pengaduan.id_pengaduan");
                $cek=mysqli_num_rows($sql);
                if ($cek<1) //jika tidak ditemukan 
                {
                    echo "<font color='red'>Mohon bersabar pengaduan belum ditanggapi</font>";
                }
                else
                {

                    if ($data=mysqli_fetch_array($sql)) 
                    {
                    
                ?>
                <div>
                Tanggal Tanggapan
                <input type="text" name="tgl_pengaduan" value="<?php echo $data['tgl_tanggapan']; ?>" class="form-control" readonly>
                </div>
                <div>
                Laporan
                <textarea class="form-control" rows="7" name="isi_laporan" readonly=""><?php echo $data['isi_laporan']; ?>
                </textarea>
                </div>
                <div>
                Tanggapan
                <textarea class="form-control" rows="7" name="tanggapan" readonly=""><?php echo $data['tanggapan']; ?>
                </textarea>
                </div>

                
                <?php } } ?>
            </form>
            </div>
        </div>

                              
 
</body>
</html>