<?php
include "../../koneksi.php";
session_start();

$nip_nup = $_POST['nip_nup'];
$id_pendidikan = $_POST['id_pendidikan'];
$no_ijazah = $_POST['no_ijazah'];
$nama_universitas = $_POST['nama_universitas'];
$tgl_lulus = $_POST['tgl_lulus'];
$tingkat_pendidikan = $_POST['tingkat_pendidikan'];
  $file_ijazah   = $_FILES['file_ijazah']['name'];

$namabaru = $nip_nup."-".$nama_universitas."-".$file_ijazah;

$rand = rand();
$ekstensi =  array('pdf');
$filename = $_FILES['file_ijazah']['name'];
$ukuran = $_FILES['file_ijazah']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 


if (empty($file_ijazah)){
    $koneksi->query("UPDATE riwayat_pendidikan  SET 
 													no_ijazah ='$_POST[no_ijazah]',
 								            		nama_universitas ='$_POST[nama_universitas]',
 								         			tgl_lulus ='$_POST[tgl_lulus]',
 										   	   		tingkat_pendidikan ='$_POST[tingkat_pendidikan]',
    												nip_nup = '$_POST[nip_nup]'
 						       					WHERE id_pendidikan ='$_POST[id_pendidikan]'");

       echo "
            <script type='text/javascript'>
              alert('Ubah Data berhasil.');
              window.location = '../pendidikan.php?nip_nup=$_GET[nip_nup]';
            </script>
          ";

  }else if(!in_array($ext,$ekstensi) ){


      echo "
        <script type='text/javascript'>
          alert('Format Berkas hanya bisa PDF!');
          window.location = 'ubah_pendidikan.php?id_pendidikan=$_GET[id_pendidikan]';
        </script>
      ";
    }else{

    if($ukuran < 5000000){

    $hapus= $koneksi->query("SELECT * FROM riwayat_pendidikan WHERE id_pendidikan ='$_POST[id_pendidikan]'");
    // menghapus file_ijazah yang lama
    $nama_gambar=mysqli_fetch_array($hapus);
    // nama field file_ijazah
    $lokasi=$nama_gambar['file_ijazah'];

    // alamat tempat file_ijazah
    $hapus_gambar="../../../login_pegawai/pendidikan/file_ijazah/$lokasi";
    // script untuk menghapus file_ijazah dari folder
    unlink($hapus_gambar);
    move_uploaded_file($_FILES['file_ijazah']['tmp_name'],'../../../login_pegawai/pendidikan/file_ijazah/'.$namabaru);
    $koneksi->query("UPDATE riwayat_pendidikan SET 
 													no_ijazah ='$_POST[no_ijazah]',
 								            		nama_universitas ='$_POST[nama_universitas]',
 								         			tgl_lulus ='$_POST[tgl_lulus]',
 										   	   		tingkat_pendidikan ='$_POST[tingkat_pendidikan]',
    												nip_nup = '$_POST[nip_nup]',
                                                    file_ijazah       = '$namabaru'
								                WHERE id_pendidikan ='$_POST[id_pendidikan]'");
   echo "
            <script type='text/javascript'>
              alert('Ubah Data berhasil.');
              window.location = '../pendidikan.php?nip_nup=$_GET[nip_nup]';
            </script>
          ";
        }else{

          echo "
            <script type='text/javascript'>
              alert('Ukuran File Terlalu Besar!');
              window.location = 'ubah_pendidikan.php?id_pendidikan=$_GET[id_pendidikan]';
            </script>
          ";
        }
  }
?>