<?php
include "../../koneksi.php";
session_start();

$nip_nup = $_POST['nip_nup'];
$id_riwayat_diklat = $_POST['id_riwayat_diklat'];
$no_sertifikat = $_POST['no_sertifikat'];
$nama_penyelenggara = $_POST['nama_penyelenggara'];
$jenis_diklat = $_POST['jenis_diklat'];
$tgl_diklat = $_POST['tgl_diklat'];


$koneksi->query("UPDATE riwayat_diklat SET id_riwayat_diklat ='$_POST[id_riwayat_diklat]',
 										no_sertifikat ='$_POST[no_sertifikat]',
 								            nama_penyelenggara ='$_POST[nama_penyelenggara]',
 								          jenis_diklat ='$_POST[jenis_diklat]',
 										   	   tgl_diklat ='$_POST[tgl_diklat]'
 						       			WHERE id_riwayat_diklat ='$_POST[id_riwayat_diklat]'");
?>
<script type="text/javascript">
	alert("Ubah Data berhasil..");
	window.location = "../pilih_riwayat/riwayat_diklat.php?nip_nup=<?php echo $_GET['nip_nup']; ?>";
</script>