<?php
$koneksi = mysqli_connect("localhost","root","","simpel") or die (mysqli_connect_error());
$tgl=date('Y/m/d');
$nik=$_POST['nik'];
$isi=$_POST['isi_laporan'];
$ft=$_FILES['foto']['name'];
$file=$_FILES['foto']['tmp_name'];
$st=0;

$sql=mysqli_query($koneksi, "insert into pengaduan(tgl_pengaduan,nik,isi_laporan,foto,status) values('$tgl','$nik','$isi','$ft','$st')");
move_uploaded_file($file, "gambar/".$ft);

if ($sql) 
{
	?>
	<script type="text/javascript">
		alert ('Data berhasil disimpan, Terimakasih sudah menulis laporan ');
		window.location="masyarakat.php";
	</script>
	<?php
}
?>
