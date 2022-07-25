<?php
include "../../koneksi.php";

$riwayat_gol = $_POST['riwayat_gol'];
$nip_nup = $_POST['nip_nup'];

$pangkat = $_POST['pangkat'];


$koneksi->query("INSERT INTO golongan(riwayat_gol,nip_nup,pangkat) VALUES
	('$riwayat_gol','$nip_nup','$pangkat')");

?>
<script type="text/javascript">
	alert("Tambah Data berhasil..");
	window.location = "../pilih_riwayat/gol_pang.php?nip_nup=<?php echo $_GET['nip_nup']; ?>";
</script>