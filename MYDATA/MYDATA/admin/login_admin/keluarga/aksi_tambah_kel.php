<?php
include "../../koneksi.php";

$nik = $_POST['nik'];
$nip_nup = $_POST['nip_nup'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$pekerjaan = $_POST['pekerjaan'];
$status = $_POST['status'];
$alamat_rmh = $_POST['alamat_rmh'];
$file = $_FILES['file']['name'];

$namabaru = $nip_nup."-".$nik."-".$nama."-".$file;

$rand = rand();
$ekstensi =  array('pdf');
$filename = $_FILES['file']['name'];
$ukuran = $_FILES['file']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
	echo "
		<script type='text/javascript'>
			alert('Format Berkas hanya bisa PDF!');
			window.location = 'tambah_keluarga.php?nip_nup=$_GET[nip_nup]';
		</script>
	";
}else{
	if($ukuran < 5000000){	

	$koneksi->query("INSERT INTO data_keluarga(nik,nip_nup,nama,jk,tempat_lahir,tanggal_lahir,pekerjaan,status,alamat_rmh,file) VALUES
	('$nik','$nip_nup','$nama','$jk','$tempat_lahir','$tanggal_lahir','$pekerjaan','$status','$alamat_rmh','$namabaru')");

	move_uploaded_file($_FILES['file']['tmp_name'],'../../../login_pegawai/keluarga/file/'.$namabaru);

	echo "
			<script type='text/javascript'>
				alert('Tambah Data berhasil..');
				window.location = '../keluarga.php?nip_nup=$_GET[nip_nup]';
			</script>
		";
	}else{

		echo "
			<script type='text/javascript'>
				alert('Ukuran File Terlalu Besar!');
				window.location = 'tambah_keluarga.php?nip_nup=$_GET[nip_nup]';
			</script>
		";
	}
}

?>