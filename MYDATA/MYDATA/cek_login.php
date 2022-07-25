<?php

include 'koneksi.php';
session_start();

$nip_nup = $_POST['nip_nup'];
$password = $_POST['password'];

$data=$koneksi->query("SELECT * FROM data_pegawai WHERE nip_nup='$nip_nup' AND password='$password'");
$cek=mysqli_num_rows($data);

if($cek > 0){
	$dlog = mysqli_fetch_assoc($data);
	$nipnup = $dlog['nip_nup'];
	$_SESSION['nip_nup'] = $nip_nup;
	$_SESSION['nip_nup'] = $nipnup;
	$_SESSION['status'] = "login";
	?>
	<script type="text/javascript">
	alert("Login berhasil..");
	window.location = "login_pegawai/index.php";
</script>
	<?php }else{ ?>
		<script type="text/javascript">
	alert("Login gagal..");
	window.location = "index.php";
</script>
<?php }	
?>