<?php 
include "../../koneksi.php";

$koneksi->query("DELETE FROM data_pegawai WHERE nip_nup='$_GET[nip_nup]'");
    
?>
<script type="text/javascript">
	alert("Hapus Data berhasil..");
	window.location = "../data_pegawai.php";
</script>