<?php 
include "../../koneksi.php";

$hapus=$koneksi->query("SELECT * FROM data_sk WHERE id_sk='$_GET[id_sk]'");
 // memilih fil untuk dihapus
    $nama_file=mysqli_fetch_assoc($hapus);
    // nama field file
    $lokasi=$nama_file['file_sk'];
    // alamat tempat file
    $hapus_file="file_sk/$lokasi";
    // script delete file dari folder
    unlink($hapus_file);
    
$koneksi->query("DELETE FROM data_sk WHERE id_sk='$_GET[id_sk]'");
    
?>
<script type="text/javascript">
	alert("Hapus Data berhasil..");
	window.location = "../pilih_riwayat/sk_kenaikan_pangkat.php";
</script>