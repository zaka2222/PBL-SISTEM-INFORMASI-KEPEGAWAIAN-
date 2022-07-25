<?php
include "../../koneksi.php";
session_start();

$nip_nup = $_POST['nip_nup'];
$id_riwayat_jabatan_AF = $_POST['id_riwayat_jabatan_AF'];
$nama_jabatan = $_POST['nama_jabatan'];
$no_sk = $_POST['no_sk'];
$tmt_jabatan = $_POST['tmt_jabatan'];
$tgl_sk = $_POST['tgl_sk'];


$koneksi->query("UPDATE riwayat_jabatan_aka_fung SET id_riwayat_jabatan_AF ='$_POST[id_riwayat_jabatan_AF]',
 										nama_jabatan ='$_POST[nama_jabatan]',
 								            no_sk ='$_POST[no_sk]',
 								          tmt_jabatan ='$_POST[tmt_jabatan]',
 										   	   tgl_sk ='$_POST[tgl_sk]'
 						       			WHERE id_riwayat_jabatan_AF ='$_POST[id_riwayat_jabatan_AF]'");
?>
<script type="text/javascript">
	alert("Ubah Data berhasil..");
	window.location = "../pilih_riwayat/riwayat_jabatan_aka_fung.php";
</script>