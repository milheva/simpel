<?php
$koneksi = mysqli_connect("localhost","root","","simpel") or die (mysqli_connect_error());
$isi = $_POST['isi_laporan'];
$id = $_POST['id_pengaduan'];

$sql = mysqli_query($koneksi, "update pengaduan set isi_laporan='$isi' where id_pengaduan='$id'");

if ($sql)
{
    ?>
    <script type="text/javascript">
    alert('Data Berhasil Di Update');
    window.location="lihat_pengaduan.php";
    </script>
    <?php
}
?>
