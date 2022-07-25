<?php
include "../../koneksi.php";
session_start();


$nip_nup = $_POST['nip_nup'];
$password = $_POST['password'];
$nama_pegawai = $_POST['nama_pegawai'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$status_pegawai = $_POST['status_pegawai'];


$koneksi->query("UPDATE data_pegawai SET nip_nup ='$_POST[nip_nup]',
 										password ='$_POST[password]',
 								            nama_pegawai ='$_POST[nama_pegawai]',
 										   	   jenis_kelamin ='$_POST[jenis_kelamin]',
												status_pegawai = '$_POST[status_pegawai]'
 						       			WHERE nip_nup ='$_POST[nip_nup]'");
?>
<script type="text/javascript">
	alert("Ubah Data berhasil..");
	window.location = "../data_pegawai.php";
</script>