<?php
include "../../koneksi.php";

$nama_jabatan = $_POST['nama_jabatan'];
$nip_nup = $_POST['nip_nup'];

$tgl_mulai = $_POST['tgl_mulai'];
$tgl_selesai = $_POST['tgl_selesai'];

$koneksi->query("INSERT INTO riwayat_jabatan_struktural(nama_jabatan,nip_nup,tgl_mulai,tgl_selesai,notif_js) VALUES
	('$nama_jabatan','$nip_nup','$tgl_mulai','$tgl_selesai','Sudah Mengisi Data Riwayat Jabatan Struktural')");

?>
<script type="text/javascript">
	alert("Tambah Data berhasil..");
	window.location = "../pilih_riwayat/riwayat_jabatan_st_tt.php";
</script>