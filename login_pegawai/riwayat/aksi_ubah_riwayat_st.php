<?php
include "../../koneksi.php";
session_start();

$nip_nup = $_POST['nip_nup'];
$id_riwayat_jabatan_s = $_POST['id_riwayat_jabatan_s'];
$nama_jabatan = $_POST['nama_jabatan'];
$tgl_mulai = $_POST['tgl_mulai'];
$tgl_selesai = $_POST['tgl_selesai'];


$koneksi->query("UPDATE riwayat_jabatan_struktural SET id_riwayat_jabatan_s ='$_POST[id_riwayat_jabatan_s]',
 										nama_jabatan ='$_POST[nama_jabatan]',
 								            tgl_mulai ='$_POST[tgl_mulai]',
 								          tgl_selesai ='$_POST[tgl_selesai]'
 						       			WHERE id_riwayat_jabatan_s ='$_POST[id_riwayat_jabatan_s]'");
?>
<script type="text/javascript">
	alert("Ubah Data berhasil..");
	window.location = "../pilih_riwayat/riwayat_jabatan_st_tt.php";
</script>