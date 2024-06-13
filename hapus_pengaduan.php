<?php
$koneksi = mysqli_connect("localhost","root","","simpel") or die (mysqli_connect_error());
$id = $_GET['id'];

$sql = mysqli_query($koneksi, "delete from pengaduan where id_pengaduan='$id'");

if ($sql)
{
    ?>
    <script type="text/javascript">
    alert('Data Berhasil Di Hapus');
    window.location="lihat_pengaduan.php";
    </script>
    <?php
}
?>
