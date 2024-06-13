<?php
$koneksi = mysqli_connect("localhost","root","","simpel") or die (mysqli_connect_error());
$nik=$_GET['nik'];

$sql=mysqli_query($koneksi,"delete from masyarakat where nik='$nik' ");

if ($sql)
{
?>
<script type="text/javascript">
    alert ('Data Berhasil Dihapus');
    window.location='data_masyarakat.php';
    </script>
    <?php
    }
    ?>