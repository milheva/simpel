<?php
$koneksi = mysqli_connect("localhost","root","","simpel") or die (mysqli_connect_error());
$nik=$_POST['nik'];
$nama=$_POST['nama'];
$user=$_POST['username'];
$pass=$_POST['password'];
$telp=$_POST['telp'];

$sql = mysqli_query($koneksi, "insert into masyarakat values('$nik','$nama','$user','$pass','$telp')");
if ($sql)
{
	?>
	<script type="text/javascript">
	alert ('Data Berhasil Disimpan, Silahkan Gunakan Untuk Login');
	window.location="index.php";
	</script>
<?php
}
?>