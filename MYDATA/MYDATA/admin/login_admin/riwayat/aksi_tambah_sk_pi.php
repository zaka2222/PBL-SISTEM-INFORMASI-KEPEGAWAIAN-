<?php
include "../../koneksi.php";

$nomor = $_POST['nomor'];
$nip_nup = $_POST['nip_nup'];
$jenis_sk = $_POST['jenis_sk'];
$tmt = $_POST['tmt'];
$tgl_sk = $_POST['tgl_sk'];
$jenis_sk = $_POST['jenis_sk'];
$file_sk = $_FILES['file_sk']['name'];


$namabaru0 = $nip_nup."-".$jenis_sk."-".$file_sk;

$rand = rand();
$ekstensi =  array('pdf');
$filename = $_FILES['file_sk']['name'];
$ukuran = $_FILES['file_sk']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
	echo "
		<script type='text/javascript'>
			alert('Format Berkas hanya bisa PDF!');
			window.location = 'tambah_sk_pi.php?nip_nup=$_GET[nip_nup]';
		</script>
	";
}else{
	if($ukuran < 5000000){

$koneksi->query("INSERT INTO data_sk(nomor,nip_nup,jenis_sk,tmt,tgl_sk,file_sk) VALUES
	('$nomor','$nip_nup','$jenis_sk','$tmt','$tgl_sk','$namabaru0')");


move_uploaded_file($_FILES['file_sk']['tmp_name'],'../../../login_pegawai/riwayat/file_sk/'.$namabaru0);

echo "
			<script type='text/javascript'>
				alert('Tambah Data berhasil..');
				window.location = '../riwayat.php?nip_nup=$_GET[nip_nup]';
			</script>
		";
	}else{

		echo "
			<script type='text/javascript'>
				alert('Ukuran File Terlalu Besar!');
				window.location = 'tambah_sk_pi.php?nip_nup=$_GET[nip_nup]';
			</script>
		";
	}
}

?>