<?php
include "../../koneksi.php";

$nama_pangkat = $_POST['nama_pangkat'];
$nip_nup = $_POST['nip_nup'];

$tmt_pangkat = $_POST['tmt_pangkat'];
$tgl_sk = $_POST['tgl_sk'];
$no_sk = $_POST['no_sk'];

$koneksi->query("INSERT INTO pangkat_inpassing(nama_pangkat,nip_nup,tmt_pangkat,tgl_sk,no_sk,notif_pangkat) VALUES
	('$nama_pangkat','$nip_nup','$tmt_pangkat','$tgl_sk','$no_sk','Sudah Mengisi Data Pangkat Inpassing')");

?>
<script type="text/javascript">
	alert("Tambah Data berhasil..");
	window.location = "../pilih_riwayat/pangkat_inpassing.php";
</script>