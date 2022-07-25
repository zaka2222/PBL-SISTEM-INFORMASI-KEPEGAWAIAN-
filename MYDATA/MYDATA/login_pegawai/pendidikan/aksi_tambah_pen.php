<?php
include "../../koneksi.php";

 error_reporting(0);
$no_ijazah = $_POST['no_ijazah'];
$nip_nup = $_POST['nip_nup'];
$tgl_lulus = $_POST['tgl_lulus'];
$nama_universitas = $_POST['nama_universitas'];
$tingkat_pendidikan = $_POST['tingkat_pendidikan'];
$file_ijazah = $_FILES['file_ijazah']['name'];

$namabaru = $nip_nup."-".$nama_universitas."-".$file_ijazah;

$rand = rand();
$ekstensi =  array('pdf');
$filename = $_FILES['file_ijazah']['name'];
$ukuran = $_FILES['file_ijazah']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
	echo "
		<script type='text/javascript'>
			alert('Format Berkas hanya bisa PDF!');
			window.location = 'tambah_pendidikan.php';
		</script>
	";
}else{
	if($ukuran < 5000000){	

		$koneksi->query("INSERT INTO riwayat_pendidikan(no_ijazah,nip_nup,tgl_lulus,nama_universitas,tingkat_pendidikan,file_ijazah,notif_pend) VALUES
			('$no_ijazah','$nip_nup','$tgl_lulus','$nama_universitas','$tingkat_pendidikan','$namabaru','Sudah Mengisi Data Pendidikan')");


		move_uploaded_file($_FILES['file_ijazah']['tmp_name'],'file_ijazah/'.$namabaru);

		echo "
			<script type='text/javascript'>
				alert('Tambah Data berhasil..');
				window.location = '../pendidikan.php';
			</script>
		";
	}else{

		echo "
			<script type='text/javascript'>
				alert('Ukuran File Terlalu Besar!');
				window.location = 'tambah_pendidikan.php';
			</script>
		";
	}
}

?>