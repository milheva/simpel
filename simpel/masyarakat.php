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
                  <a href="masyarakat.php" class="list-group-item list-group-item-action active">
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

                <!-- Page Heading -->
            Selamat Datang di Aplikasi Pelaporan Pengaduan Masyarakat yang dibuat untuk melaporkan 
            kejadian kejadian yang ada di masyarakat <br><br>
            Anda Login Sebagai : <h2><b><?php echo $_SESSION['nama'];?>
            </div>
            </div
            


                              
 
</body>
</html>