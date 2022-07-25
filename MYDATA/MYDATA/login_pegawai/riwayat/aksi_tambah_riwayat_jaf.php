<?php
include "../../koneksi.php";

$nama_jabatan = $_POST['nama_jabatan'];
$nip_nup = $_POST['nip_nup'];

$tmt_jabatan = $_POST['tmt_jabatan'];
$tgl_sk = $_POST['tgl_sk'];
$no_sk = $_POST['no_sk'];

$koneksi->query("INSERT INTO riwayat_jabatan_aka_fung(nama_jabatan,nip_nup,tmt_jabatan,tgl_sk,no_sk,notif_jaf) VALUES
	('$nama_jabatan','$nip_nup','$tmt_jabatan','$tgl_sk','$no_sk','Sudah Mengisi Data Riwayat Jabatan Akademi')");

?>
<script type="text/javascript">
	alert("Tambah Data berhasil..");
	window.location = "../pilih_riwayat/riwayat_jabatan_aka_fung.php";
</script>