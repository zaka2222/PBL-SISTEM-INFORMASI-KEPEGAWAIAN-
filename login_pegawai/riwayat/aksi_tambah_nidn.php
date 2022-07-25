<?php
include "../../koneksi.php";

$nomor = $_POST['nomor'];
$nip_nup = $_POST['nip_nup'];

$tmt = $_POST['tmt'];
$tgl = $_POST['tgl'];

$koneksi->query("INSERT INTO nidn(nomor,nip_nup,tmt,tgl) VALUES
	('$nomor','$nip_nup','$tmt','$tgl')");



?>
<script type="text/javascript">
	alert("Tambah Data berhasil..");
	window.location = "../pilih_riwayat/nidn.php";
</script>

<!--
<?php
include "../../koneksi.php";

$nomor = $_POST['nomor'];
$nip_nup = $_POST['nip_nup'];

$tmt = $_POST['tmt'];
$tgl = $_POST['tgl'];
$nama_pegawai = $_POST['nama_pegawai'];
$file_nidn   = $_FILES['file_nidn']['name'];


$namabaru0 = $nip_nup."-".$nama_pegawai."-"."NIDN"."-".$file_nidn;

$koneksi->query("INSERT INTO nidn(nomor,nip_nup,tmt,tgl,file_nidn) VALUES
	('$nomor','$nip_nup','$tmt','$tgl','$namabaru0')");

move_uploaded_file($_FILES['file_nidn']['tmp_name'],'file_nidn/'.$namabaru0);

?>
<script type="text/javascript">
	alert("Tambah Data berhasil..");
	window.location = "../pilih_riwayat/nidn.php";
</script>
-->