<?php
include "../koneksi.php";
session_start();

$id_admin = $_POST['id_admin'];
$password = $_POST['password'];


$koneksi->query("UPDATE data_admin SET password ='$_POST[password]'
 						       			WHERE id_admin ='$_POST[id_admin]'");
?>
<script type="text/javascript">
	alert("Ganti Password berhasil..");
	window.location = "das.php";
</script>