<?php 
include "../../koneksi.php";
$koneksi->query("DELETE FROM riwayat_jabatan_struktural WHERE id_riwayat_jabatan_s='$_GET[id_riwayat_jabatan_s]'");
    
?>
<script type="text/javascript">
	alert("Hapus Data berhasil..");
	window.location = "../pilih_riwayat/riwayat_jabatan_st_tt.php";
</script>