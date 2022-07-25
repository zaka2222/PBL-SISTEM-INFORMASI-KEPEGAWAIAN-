<?php 
include "../../koneksi.php";
$koneksi->query("DELETE FROM pangkat_inpassing WHERE id_pangkat_inpassing='$_GET[id_pangkat_inpassing]'");
    
?>
<script type="text/javascript">
	alert("Hapus Data berhasil..");
	window.location = "../pilih_riwayat/pangkat_inpassing.php?nip_nup=<?php echo $_GET['nip_nup']; ?>";
</script>