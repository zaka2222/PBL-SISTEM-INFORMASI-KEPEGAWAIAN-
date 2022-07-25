<?php
include "../../koneksi.php";

$nomor = $_POST['nomor'];
$nip_nup = $_POST['nip_nup'];

$tempat = $_POST['tempat'];
$tgl = $_POST['tgl'];
$tahun_pendapatan = $_POST['tahun_pendapatan'];
$bidang_ilmu = $_POST['bidang_ilmu'];

$koneksi->query("INSERT INTO no_reg_serdos(nomor,nip_nup,tempat,tgl,tahun_pendapatan,bidang_ilmu) VALUES
	('$nomor','$nip_nup','$tempat','$tgl','$tahun_pendapatan','$bidang_ilmu')");



?>
<script type="text/javascript">
	alert("Tambah Data berhasil..");
	window.location = "../pilih_riwayat/no_reg_serdos.php?nip_nup=<?php echo $_GET['nip_nup']; ?>";
</script>