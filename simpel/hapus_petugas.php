<?php
$koneksi = mysqli_connect("localhost","root","","simpel") or die (mysqli_connect_error());
$id=$_GET['id'];

$sql=mysqli_query($koneksi,"delete from petugas where id_petugas='$id'");

if ($sql)
{
?>
<script type="text/javascript">
    alert ('Data Berhasil Dihapus');
    window.location='data_petugas.php';
    </script>
    <?php
    }
    ?>