<?php 
include "../../koneksi.php";
error_reporting(0);
$hapus=$koneksi->query("SELECT * FROM nidn WHERE id_nidn='$_GET[id_nidn]'");
 // memilih fil untuk dihapus
    $nama_file=mysqli_fetch_assoc($hapus);
    // nama field file
    $lokasi=$nama_file['file_nidn'];
    // alamat tempat file
    $hapus_file="file_nidn/$lokasi";
    // script delete file dari folder
    unlink($hapus_file);

$koneksi->query("DELETE FROM nidn WHERE id_nidn='$_GET[id_nidn]'");
    
?>
<script type="text/javascript">
	alert("Hapus Data berhasil..");
	window.location = "../pilih_riwayat/nidn.php";
</script>