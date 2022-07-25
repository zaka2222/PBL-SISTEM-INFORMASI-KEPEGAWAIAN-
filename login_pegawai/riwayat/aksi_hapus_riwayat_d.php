<?php 
include "../../koneksi.php";
$koneksi->query("DELETE FROM riwayat_diklat WHERE id_riwayat_diklat='$_GET[id_riwayat_diklat]'");
    
?>
<script type="text/javascript">
	alert("Hapus Data berhasil..");
	window.location = "../pilih_riwayat/riwayat_diklat.php";
</script>