<?php

include 'koneksi.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$data=$koneksi->query("SELECT * FROM data_admin WHERE username='$username' AND password='$password'");
$cek=mysqli_num_rows($data);

if($cek > 0){
	$dlog = mysqli_fetch_assoc($data);
	$id_admin = $dlog['id_admin'];
	$_SESSION['username'] = $username;
	$_SESSION['id_admin'] = $id_admin;
	$_SESSION['status'] = "login";
	?>
	<script type="text/javascript">
	alert("Login berhasil..");
	window.location = "login_admin/das.php";
</script>
	<?php }else{ ?>
		<script type="text/javascript">
	alert("Login gagal..");
	window.location = "index.php";
</script>
<?php }	
?>