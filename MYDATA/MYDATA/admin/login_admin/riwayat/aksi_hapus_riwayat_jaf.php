<?php 
include "../../koneksi.php";
$koneksi->query("DELETE FROM riwayat_jabatan_aka_fung WHERE id_riwayat_jabatan_AF='$_GET[id_riwayat_jabatan_AF]'");
    
?>
<script type="text/javascript">
	alert("Hapus Data berhasil..");
	window.location = "../pilih_riwayat/riwayat_jabatan_aka_fung.php?nip_nup=<?php echo $_GET['nip_nup']; ?>";
</script>