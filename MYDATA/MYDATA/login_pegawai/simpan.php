<?php
include "../koneksi.php";
session_start();

$nip_nup = $_POST['nip_nup'];
$password = $_POST['password'];
$ganti_sandi = $_POST['ganti_sandi'];
$notif = $_POST['notif'];


$koneksi->query("UPDATE data_pegawai SET password ='$_POST[password]',
										 ganti_sandi ='$_POST[ganti_sandi]',
										 notif ='$_POST[notif]'
 						       			WHERE nip_nup ='$_POST[nip_nup]'");
?>
<script type="text/javascript">
	alert("Ganti Password berhasil..");
	window.location = "index.php";
</script>