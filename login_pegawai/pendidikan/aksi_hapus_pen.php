<?php 
include "../../koneksi.php";

$hapus=$koneksi->query("SELECT * FROM riwayat_pendidikan WHERE id_pendidikan='$_GET[id_pendidikan]'");
 // memilih fil untuk dihapus
    $nama_file=mysqli_fetch_assoc($hapus);
    // nama field file
    $lokasi=$nama_file['file_ijazah'];
    // alamat tempat file
    $hapus_file="file_ijazah/$lokasi";
    // script delete file dari folder
    unlink($hapus_file);

$koneksi->query("DELETE FROM riwayat_pendidikan WHERE id_pendidikan='$_GET[id_pendidikan]'");
    
?>
<script type="text/javascript">
	alert("Hapus Data berhasil..");
	window.location = "../pendidikan.php";
</script>