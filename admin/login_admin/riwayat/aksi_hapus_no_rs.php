<?php 
include "../../koneksi.php";
error_reporting(0);
$hapus=$koneksi->query("SELECT * FROM no_reg_serdos WHERE id_no_reg_serdos='$_GET[id_no_reg_serdos]'");
 // memilih fil untuk dihapus
    $nama_file=mysqli_fetch_assoc($hapus);
    // nama field file
    $lokasi=$nama_file['file_nrs'];
    // alamat tempat file
    $hapus_file="file_nrs/$lokasi";
    // script delete file dari folder
    unlink($hapus_file);

$koneksi->query("DELETE FROM no_reg_serdos WHERE id_no_reg_serdos='$_GET[id_no_reg_serdos]'");
    
?>
<script type="text/javascript">
	alert("Hapus Data berhasil..");
	window.location = "../pilih_riwayat/no_reg_serdos.php?nip_nup=<?php echo $_GET['nip_nup']; ?>";
</script>