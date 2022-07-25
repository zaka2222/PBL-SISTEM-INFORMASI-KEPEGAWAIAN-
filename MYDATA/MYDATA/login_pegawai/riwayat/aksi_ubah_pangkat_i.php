<?php
include "../../koneksi.php";
session_start();

$nip_nup = $_POST['nip_nup'];
$id_pangkat_inpassing = $_POST['id_pangkat_inpassing'];
$nama_pangkat = $_POST['nama_pangkat'];
$no_sk = $_POST['no_sk'];
$tmt_pangkat = $_POST['tmt_pangkat'];
$tgl_sk = $_POST['tgl_sk'];


$koneksi->query("UPDATE pangkat_inpassing SET id_pangkat_inpassing ='$_POST[id_pangkat_inpassing]',
 										nama_pangkat ='$_POST[nama_pangkat]',
 								            no_sk ='$_POST[no_sk]',
 								          tmt_pangkat ='$_POST[tmt_pangkat]',
 										   	   tgl_sk ='$_POST[tgl_sk]'
 						       			WHERE id_pangkat_inpassing ='$_POST[id_pangkat_inpassing]'");
?>
<script type="text/javascript">
	alert("Ubah Data berhasil..");
	window.location = "../pilih_riwayat/pangkat_inpassing.php";
</script>