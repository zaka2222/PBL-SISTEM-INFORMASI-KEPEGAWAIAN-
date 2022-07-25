<?php
include "../../koneksi.php";
session_start();

 error_reporting(0);
$nip_nup = $_POST['nip_nup'];
$id_keluarga = $_POST['id_keluarga'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
  $file   = $_FILES['file']['name'];

$namabaru9 = $nip_nup."-".$nik."-".$nama."-".$file;

$rand = rand();
$ekstensi =  array('pdf');
$filename = $_FILES['file']['name'];
$ukuran = $_FILES['file']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
  echo "
    <script type='text/javascript'>
      alert('Format Berkas hanya bisa PDF!');
      window.location = 'pribadi.php';
    </script>
  ";
}else{

if (empty($file)){
    $koneksi->query("UPDATE data_keluarga  
                                            WHERE id_keluarga ='$_POST[id_keluarga]'");

  }else{

    if($ukuran < 5000000){

    $hapus= $koneksi->query("SELECT * FROM data_keluarga WHERE id_keluarga ='$_POST[id_keluarga]'");
    // menghapus file yang lama
    $nama_gambar=mysqli_fetch_array($hapus);
    // nama field file
    $lokasi=$nama_gambar['file'];

    // alamat tempat file
    $hapus_gambar="../keluarga/file/$lokasi";
    // script untuk menghapus file dari folder
    unlink($hapus_gambar);
    move_uploaded_file($_FILES['file']['tmp_name'],'../keluarga/file/'.$namabaru9);
    $koneksi->query("UPDATE data_keluarga SET 
                                                    file       = '$namabaru9'
                                                WHERE id_keluarga ='$_POST[id_keluarga]'");
  echo "
            <script type='text/javascript'>
              alert('Berhasil');
              window.location = 'pribadi.php';
            </script>
          ";
        }else{

          echo "
            <script type='text/javascript'>
              alert('Ukuran File Terlalu Besar!');
              window.location = 'pribadi.php';
            </script>
          ";
        }
  }
}
?>