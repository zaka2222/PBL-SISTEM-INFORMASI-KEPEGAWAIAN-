<?php
include "../../koneksi.php";
session_start();

$nip_nup = $_POST['nip_nup'];
$id_sk = $_POST['id_sk'];
$jenis_sk = $_POST['jenis_sk'];
$nomor = $_POST['nomor'];
$tmt = $_POST['tmt'];
$tgl_sk = $_POST['tgl_sk'];
$nama_pegawai = $_POST['nama_pegawai'];
  $file_sk   = $_FILES['file_sk']['name'];

$namabaru9 = $nip_nup."-".$nama_pegawai."-".$jenis_sk."-".$file_sk;

$rand = rand();
$ekstensi =  array('pdf');
$filename = $_FILES['file_sk']['name'];
$ukuran = $_FILES['file_sk']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);



if (empty($file_sk)){
    $koneksi->query("UPDATE data_sk  SET 
 										jenis_sk ='$_POST[jenis_sk]',
 								            nomor ='$_POST[nomor]',
 								          tmt ='$_POST[tmt]',
 										   	   tgl_sk ='$_POST[tgl_sk]'
 						       			WHERE id_sk ='$_POST[id_sk]'");
    echo "
            <script type='text/javascript'>
              alert('Ubah Data berhasil.');
              window.location = '../riwayat.php';
            </script>
          ";

  }else if(!in_array($ext,$ekstensi) ) {

    
      echo "
        <script type='text/javascript'>
          alert('Format Berkas hanya bisa PDF!');
          window.location = 'ubah_sk_pi.php?id_sk=$_GET[id_sk]';
        </script>
      ";
    }else{

    if($ukuran < 5000000){

    $hapus= $koneksi->query("SELECT * FROM data_sk WHERE id_sk ='$_POST[id_sk]'");
    // menghapus file_sk yang lama
    $nama_gambar=mysqli_fetch_array($hapus);
    // nama field file_sk
    $lokasi=$nama_gambar['file_sk'];

    // alamat tempat file_sk
    $hapus_gambar="file_sk/$lokasi";
    // script untuk menghapus file_sk dari folder
    unlink($hapus_gambar);
    move_uploaded_file($_FILES['file_sk']['tmp_name'],'file_sk/'.$namabaru9);
    $koneksi->query("UPDATE data_sk SET 
 										jenis_sk ='$_POST[jenis_sk]',
 								            nomor ='$_POST[nomor]',
 								          tmt ='$_POST[tmt]',
 										   	   tgl_sk ='$_POST[tgl_sk]',
                                                    file_sk       = '$namabaru9'
								                WHERE id_sk ='$_POST[id_sk]'");
  echo "
            <script type='text/javascript'>
              alert('Ubah Data berhasil.');
              window.location = '../riwayat.php';
            </script>
          ";
        }else{

          echo "
            <script type='text/javascript'>
              alert('Ukuran File Terlalu Besar!');
              window.location = 'ubah_sk_pi.php?id_sk=$_GET[id_sk]';
            </script>
          ";
        }
  }

?>