<?php 
include "../../koneksi.php";

 error_reporting(0);
$nik = $_POST['nik'];
$nip_nup = $_POST['nip_nup'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$pekerjaan = $_POST['pekerjaan'];
$status = $_POST['status'];
$alamat_rmh = $_POST['alamat_rmh'];

$namabaru6 = $nip_nup."-".$nik."-".$nama;

$rand = rand();
$ekstensi =  array('pdf');
$filename = $_FILES['file']['name'];
$ukuran = $_FILES['file']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
	echo "
		<script type='text/javascript'>
			alert('Format Berkas hanya bisa PDF!');
			window.location = 'tambah_keluarga.php';
		</script>
	";
}else{
	if($ukuran < 5000000){		
		$xx = $namabaru6.'_'.$filename;
		move_uploaded_file($_FILES['file']['tmp_name'], 'file/'.$namabaru6.'_'.$filename);
		mysqli_query($koneksi, "INSERT INTO data_keluarga VALUES(NULL,'$nip_nup','$nik','$nama','$jk','$tempat_lahir','$tanggal_lahir','$pekerjaan','$status','$alamat_rmh','$xx','Sudah Mengisi Data Keluarga')");

		echo "
			<script type='text/javascript'>
				alert('Tambah Data Berhasil...');
				window.location = '../keluarga.php';
			</script>
		";
	}else{

		echo "
			<script type='text/javascript'>
				alert('Ukuran File Terlalu Besar!');
				window.location = 'tambah_keluarga.php';
			</script>
		";
	}
}