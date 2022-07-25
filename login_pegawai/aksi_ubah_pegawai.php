<?php
include "../koneksi.php";
session_start();

$nip_nup = $_POST['nip_nup'];
$password = $_POST['password'];
$nama_pegawai = $_POST['nama_pegawai'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$no_ktp = $_POST['no_ktp'];
$no_kk = $_POST['no_kk'];
$npwp = $_POST['npwp'];
$status_pernikahan = $_POST['status_pernikahan'];
$no_surat_nikah = $_POST['no_surat_nikah'];
$tanggal_nikah = $_POST['tanggal_nikah'];
$no_surat_cerai = $_POST['no_surat_cerai'];
$tanggal_cerai = $_POST['tanggal_cerai'];
$alamat_rmh = $_POST['alamat_rmh'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];
$status_pegawai = $_POST['status_pegawai'];
$jmlh_anak = $_POST['jmlh_anak'];
$no_bpjs_kesehatan = $_POST['no_bpjs_kesehatan'];
$no_bpjs_ketenagakerjaan = $_POST['no_bpjs_ketenagakerjaan'];

$no_sk_nidn = $_POST['no_sk_nidn'];
$tmt_nidn = $_POST['tmt_nidn'];
$tgl_sk_nidn = $_POST['tgl_sk_nidn'];

$no_sk_ntik = $_POST['no_sk_ntik'];
$tmt_ntik = $_POST['tmt_ntik'];
$tgl_sk_ntik = $_POST['tgl_sk_ntik'];

$notif_profil = $_POST['notif_profil'];


$koneksi->query("UPDATE data_pegawai SET password ='$_POST[password]',
 										nama_pegawai ='$_POST[nama_pegawai]',
 								            tempat_lahir ='$_POST[tempat_lahir]',
 								          tanggal_lahir ='$_POST[tanggal_lahir]',
 										   	   jenis_kelamin ='$_POST[jenis_kelamin]',
 										   	   agama ='$_POST[agama]',
 										   	   no_ktp = '$_POST[no_ktp]',
												no_kk = '$_POST[no_kk]',
												npwp = '$_POST[npwp]',
												status_pernikahan = '$_POST[status_pernikahan]',
												no_surat_nikah = '$_POST[no_surat_nikah]',
												tanggal_nikah = '$_POST[tanggal_nikah]',
												no_surat_cerai = '$_POST[no_surat_cerai]',
												tanggal_cerai = '$_POST[tanggal_cerai]',
												alamat_rmh = '$_POST[alamat_rmh]',
												no_hp = '$_POST[no_hp]',
												email = '$_POST[email]',
												status_pegawai = '$_POST[status_pegawai]',
												no_bpjs_kesehatan = '$_POST[no_bpjs_kesehatan]',
												no_bpjs_ketenagakerjaan = '$_POST[no_bpjs_ketenagakerjaan]',
												no_sk_nidn = '$_POST[no_sk_nidn]',
												tmt_nidn = '$_POST[tmt_nidn]',
												tgl_sk_nidn = '$_POST[tgl_sk_nidn]',
												no_sk_ntik = '$_POST[no_sk_ntik]',
												tmt_ntik = '$_POST[tmt_ntik]',
												tgl_sk_ntik = '$_POST[tgl_sk_ntik]',
												notif_profil = '$_POST[notif_profil]',
												jmlh_anak = '$_POST[jmlh_anak]'
 						       			WHERE nip_nup ='$_POST[nip_nup]'");
?>
<script type="text/javascript">
	alert("Ubah Data berhasil..");
	window.location = "index.php";
</script>