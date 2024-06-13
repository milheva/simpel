<?php
$koneksi = mysqli_connect("localhost","root","","simpel") or die (mysqli_connect_error());
$sql=mysqli_query($koneksi,"update pengaduan set status='proses' where id_pengaduan='$_GET[id]'");
if ($sql)
{
    header('location:verifikasi_pengaduan_petugas.php');
}
?>