<?php 
include "../../koneksi.php";
$koneksi->query("DELETE FROM golongan WHERE id_gol='$_GET[id_gol]'");
    
?>
<script type="text/javascript">
	alert("Hapus Data berhasil..");
	window.location = "../pilih_riwayat/gol_pang.php";
</script>