<?php
$koneksi = mysqli_connect("localhost","root","","simpel") or die (mysqli_connect_error());
$nama=$_POST['nama_petugas'];
$user=$_POST['username'];
$pass=$_POST['password'];
$telp=$_POST['telp'];
$level=$_POST['level'];
$sql=mysqli_query($koneksi, "insert into petugas(nama_petugas,username,password,telp,level) values('$nama','$user','$pass','$telp','$level') ");

if ($sql)
{
?>
<script type="text/javascript">
    alert ('Data Berhasil Disimpan');
    window.location='data_petugas.php';
</script>
<?php
}
?>