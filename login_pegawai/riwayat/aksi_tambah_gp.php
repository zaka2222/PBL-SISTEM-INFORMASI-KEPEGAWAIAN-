<?php
include "../../koneksi.php";

$riwayat_gol = $_POST['riwayat_gol'];
$nip_nup = $_POST['nip_nup'];

$pangkat = $_POST['pangkat'];


$koneksi->query("INSERT INTO golongan(riwayat_gol,nip_nup,pangkat,notif_gol) VALUES
	('$riwayat_gol','$nip_nup','$pangkat','Sudah Mengisi Data Golongan')");

?>
<script type="text/javascript">
	alert("Tambah Data berhasil..");
	window.location = "../pilih_riwayat/gol_pang.php";
</script>