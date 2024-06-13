
<?php
$koneksi = mysqli_connect("localhost","root","","simpel") or die (mysqli_connect_error());
$user=$_POST['username'];
$pass=$_POST['password'];

$sql=mysqli_query($koneksi,"SELECT * from masyarakat where username='$user' and password='$pass'");
$cek=mysqli_num_rows($sql);

if ($cek>0)
{
	$data=mysqli_fetch_array($sql);
	session_start();
	$nik = $data['nik'];
	$_SESSION['nama']=$user;
	$_SESSION['nik']=$nik;
	header('location:masyarakat.php');

}
else
{
	?>
	<script type="text/javascript">
	alert ('Username Atau Password Tidak Ditemukan');
	window.location="index.php";
	</script>
	<?php
}
?>