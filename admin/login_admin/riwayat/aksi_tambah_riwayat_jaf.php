<?php
include "../../koneksi.php";

$nama_jabatan = $_POST['nama_jabatan'];
$nip_nup = $_POST['nip_nup'];

$tmt_jabatan = $_POST['tmt_jabatan'];
$tgl_sk = $_POST['tgl_sk'];
$no_sk = $_POST['no_sk'];

$koneksi->query("INSERT INTO riwayat_jabatan_aka_fung(nama_jabatan,nip_nup,tmt_jabatan,tgl_sk,no_sk) VALUES
	('$nama_jabatan','$nip_nup','$tmt_jabatan','$tgl_sk','$no_sk')");

?>
<script type="text/javascript">
	alert("Tambah Data berhasil..");
	window.location = "../pilih_riwayat/riwayat_jabatan_aka_fung.php?nip_nup=<?php echo $_GET['nip_nup']; ?>";
</script>