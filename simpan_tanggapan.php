<?php
$koneksi = mysqli_connect("localhost","root","","simpel") or die (mysqli_connect_error());
$id_pengaduan=$_POST['id_pengaduan'];
$tgl = $_POST['tgl_tanggapan'];
$tanggapan =$_POST['tanggapan'];
$id_petugas=$_POST['id_petugas'];
$st ='selesai';


$sql=mysqli_query($koneksi,"insert into tanggapan(id_pengaduan,tgl_tanggapan,tanggapan,id_petugas) values('$id_pengaduan','$tgl','$tanggapan','$id_petugas') ");
$update_st=mysqli_query($koneksi,"update pengaduan set status='$st' where id_pengaduan='$id_pengaduan' ");

if ($sql)
{
    ?>
    <script type="text/javascript">
        alert ('Data Sudah Ditanggapi');
        window.location="verifikasi_pengaduan_admin.php";
    </script>
<?php
}

?>