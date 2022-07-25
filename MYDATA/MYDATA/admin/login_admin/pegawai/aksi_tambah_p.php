<?php
include "../../koneksi.php";


$nip_nup = $_POST['nip_nup'];
$nama_pegawai = $_POST['nama_pegawai'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$status_pegawai = $_POST['status_pegawai'];
$password = $_POST['password'];

$koneksi->query("INSERT INTO data_pegawai(nip_nup,nama_pegawai,jenis_kelamin,status_pegawai,password) VALUES
	('$nip_nup','$nama_pegawai','$jenis_kelamin','$status_pegawai','$password')");

?>
<script type="text/javascript">
	alert("Tambah Data berhasil..");
	window.location = "../data_pegawai.php";
</script>