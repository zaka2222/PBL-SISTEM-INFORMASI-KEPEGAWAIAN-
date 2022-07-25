<?php
include "../../koneksi.php";
session_start();

$nip_nup = $_POST['nip_nup'];
$id_gol = $_POST['id_gol'];

$riwayat_gol = $_POST['riwayat_gol'];
$pangkat = $_POST['pangkat'];


$koneksi->query("UPDATE golongan SET id_gol ='$_POST[id_gol]',
 										
 								            riwayat_gol ='$_POST[riwayat_gol]',
 								          pangkat ='$_POST[pangkat]'
 						       			WHERE id_gol ='$_POST[id_gol]'");
?>
<script type="text/javascript">
	alert("Ubah Data berhasil..");
	window.location = "../pilih_riwayat/gol_pang.php?nip_nup=<?php echo $_GET['nip_nup']; ?>";
</script>