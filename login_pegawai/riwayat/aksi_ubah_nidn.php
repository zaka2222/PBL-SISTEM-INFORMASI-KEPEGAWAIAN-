<?php
include "../../koneksi.php";
session_start();
error_reporting(0);
$nip_nup = $_POST['nip_nup'];
$id_nidn = $_POST['id_nidn'];

$nomor = $_POST['nomor'];
$tmt = $_POST['tmt'];
$tgl = $_POST['tgl'];
$nama_pegawai = $_POST['nama_pegawai'];
$file_nidn   = $_FILES['file_nidn']['name'];


$namabaru7 = $nip_nup."-".$nama_pegawai."-"."NIDN"."-".$file_nidn;

if (empty($file_nidn)){
    $koneksi->query("UPDATE nidn  SET 
 										
 								            nomor ='$_POST[nomor]',
 								          tmt ='$_POST[tmt]',
 										   	   tgl ='$_POST[tgl]'
 						       			WHERE id_nidn ='$_POST[id_nidn]'");

  }else{

    $hapus= $koneksi->query("SELECT * FROM nidn WHERE id_nidn ='$_POST[id_nidn]'");
    // menghapus file_nidn yang lama
    $nama_gambar=mysqli_fetch_array($hapus);
    // nama field file_nidn
    $lokasi=$nama_gambar['file_nidn'];

    // alamat tempat file_nidn
    $hapus_gambar="file_nidn/$lokasi";
    // script untuk menghapus file_nidn dari folder
    unlink($hapus_gambar);
    move_uploaded_file($_FILES['file_nidn']['tmp_name'],'file_nidn/'.$namabaru7);
    $koneksi->query("UPDATE nidn SET 
 										
 								            nomor ='$_POST[nomor]',
 								          tmt ='$_POST[tmt]',
 										   	   tgl ='$_POST[tgl]',
                                                    file_nidn       = '$namabaru7'
                                                WHERE id_nidn ='$_POST[id_nidn]'");
  }

?>
<script type="text/javascript">
	alert("Ubah Data berhasil..");
	window.location = "../pilih_riwayat/nidn.php";
</script>