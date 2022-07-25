<?php 
include "../../koneksi.php";

$hapus=$koneksi->query("SELECT * FROM data_keluarga WHERE id_keluarga='$_GET[id_keluarga]'");
 // memilih fil untuk dihapus
    $nama_file=mysqli_fetch_assoc($hapus);
    // nama field file
    $lokasi=$nama_file['file'];
    // alamat tempat file
    $hapus_file="file/$lokasi";
    // script delete file dari folder
    unlink($hapus_file);
    
$koneksi->query("DELETE FROM data_keluarga WHERE id_keluarga='$_GET[id_keluarga]'");
    
?>
<script type="text/javascript">
	alert("Hapus Data berhasil..");
	window.location = "../keluarga.php";
</script>