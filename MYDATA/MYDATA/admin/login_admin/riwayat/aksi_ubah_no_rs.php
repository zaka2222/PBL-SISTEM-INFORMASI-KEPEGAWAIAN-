<?php
include "../../koneksi.php";
session_start();
error_reporting(0);
$nip_nup = $_POST['nip_nup'];
$id_no_reg_serdos = $_POST['id_no_reg_serdos'];

$nomor = $_POST['nomor'];
$tempat = $_POST['tempat'];
$tgl = $_POST['tgl'];
$tahun_pendapatan = $_POST['tahun_pendapatan'];
$bidang_ilmu = $_POST['bidang_ilmu'];

$nama_pegawai = $_POST['nama_pegawai'];
$file_nrs   = $_FILES['file_nrs']['name'];


$namabaru7 = $nip_nup."-".$nama_pegawai."-"."NRS"."-".$file_nrs;

if (empty($file_nrs)){
    $koneksi->query("UPDATE no_reg_serdos SET 
 								            nomor ='$_POST[nomor]',
 								          tempat ='$_POST[tempat]',
 										   	   tgl ='$_POST[tgl]',
 								          tahun_pendapatan ='$_POST[tahun_pendapatan]',
 										   	   bidang_ilmu ='$_POST[bidang_ilmu]'
 						       			WHERE id_no_reg_serdos ='$_POST[id_no_reg_serdos]'");

  }else{

    $hapus= $koneksi->query("SELECT * FROM no_reg_serdos WHERE id_no_reg_serdos ='$_POST[id_no_reg_serdos]'");
    // menghapus file_nrs yang lama
    $nama_gambar=mysqli_fetch_array($hapus);
    // nama field file_nrs
    $lokasi=$nama_gambar['file_nrs'];

    // alamat tempat file_nrs
    $hapus_gambar="file_nrs/$lokasi";
    // script untuk menghapus file_nrs dari folder
    unlink($hapus_gambar);
    move_uploaded_file($_FILES['file_nrs']['tmp_name'],'file_nrs/'.$namabaru7);
    $koneksi->query("UPDATE no_reg_serdos SET
 								            nomor ='$_POST[nomor]',
 								          tempat ='$_POST[tempat]',
 										   	   tgl ='$_POST[tgl]',
 								          tahun_pendapatan ='$_POST[tahun_pendapatan]',
 										   	   bidang_ilmu ='$_POST[bidang_ilmu]',
                                                    file_nrs       = '$namabaru7'
                                               WHERE id_no_reg_serdos ='$_POST[id_no_reg_serdos]'");
  }

?>
<script type="text/javascript">
	alert("Ubah Data berhasil..");
	window.location = "../pilih_riwayat/no_reg_serdos.php?nip_nup=<?php echo $_GET['nip_nup']; ?>";
</script>