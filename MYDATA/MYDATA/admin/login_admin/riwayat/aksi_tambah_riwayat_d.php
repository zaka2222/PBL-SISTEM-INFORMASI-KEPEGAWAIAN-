<?php
include "../../koneksi.php";

$nama_penyelenggara = $_POST['nama_penyelenggara'];
$nip_nup = $_POST['nip_nup'];

$no_sertifikat = $_POST['no_sertifikat'];
$tgl_diklat = $_POST['tgl_diklat'];
$jenis_diklat = $_POST['jenis_diklat'];

$koneksi->query("INSERT INTO riwayat_diklat(nama_penyelenggara,nip_nup,no_sertifikat,tgl_diklat,jenis_diklat) VALUES
	('$nama_penyelenggara','$nip_nup','$no_sertifikat','$tgl_diklat','$jenis_diklat')");

?>
<script type="text/javascript">
	alert("Tambah Data berhasil..");
	window.location = "../pilih_riwayat/riwayat_diklat.php?nip_nup=<?php echo $_GET['nip_nup']; ?>";
</script>