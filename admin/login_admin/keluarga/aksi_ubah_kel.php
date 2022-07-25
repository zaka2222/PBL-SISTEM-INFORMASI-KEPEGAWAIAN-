<?php
include "../../koneksi.php";
session_start();

$nip_nup = $_POST['nip_nup'];
$id_keluarga = $_POST['id_keluarga'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$tempat_lahir = $_POST['tempat_lahir'];
$jk = $_POST['jk'];
$pekerjaan = $_POST['pekerjaan'];
$status = $_POST['status'];
$alamat_rmh = $_POST['alamat_rmh'];
$file   = $_FILES['file']['name'];

$namabaru9 = $nip_nup."-".$nik."-".$nama."-".$file;

$rand = rand();
$ekstensi =  array('pdf');
$filename = $_FILES['file']['name'];
$ukuran = $_FILES['file']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 


	if (empty($file)){
    $koneksi->query("UPDATE data_keluarga  SET 
                                              nik ='$_POST[nik]',
                                              nama ='$_POST[nama]',
                                              tanggal_lahir ='$_POST[tanggal_lahir]',
                                             tempat_lahir ='$_POST[tempat_lahir]',
                                             jk ='$_POST[jk]',
                                             pekerjaan = '$_POST[pekerjaan]',
                                            status = '$_POST[status]',
                                            alamat_rmh = '$_POST[alamat_rmh]',
                                            nip_nup = '$_POST[nip_nup]'
                                            WHERE id_keluarga ='$_POST[id_keluarga]'");

          echo "
            <script type='text/javascript'>
              alert('Ubah Data berhasil..');
              window.location = '../keluarga.php?nip_nup=$_GET[nip_nup]';
            </script>
          ";

  }else if(!in_array($ext,$ekstensi) ){

   
      echo "
        <script type='text/javascript'>
          alert('Format Berkas hanya bisa PDF!');
          window.location = 'ubah_keluarga.php?id_keluarga=$_GET[id_keluarga]';
        </script>
      ";
    }else{

    if($ukuran < 5000000){

    $hapus= $koneksi->query("SELECT * FROM data_keluarga WHERE id_keluarga ='$_POST[id_keluarga]'");
    // menghapus file yang lama
    $nama_gambar=mysqli_fetch_array($hapus);
    // nama field file
    $lokasi=$nama_gambar['file'];

    // alamat tempat file
    $hapus_gambar="../../../login_pegawai/keluarga/file/$lokasi";
    // script untuk menghapus file dari folder
    unlink($hapus_gambar);
    move_uploaded_file($_FILES['file']['tmp_name'],'../../../login_pegawai/keluarga/file/'.$namabaru9);
    $koneksi->query("UPDATE data_keluarga SET 
                                        nik ='$_POST[nik]',
                                              nama ='$_POST[nama]',
                                              tanggal_lahir ='$_POST[tanggal_lahir]',
                                             tempat_lahir ='$_POST[tempat_lahir]',
                                             jk ='$_POST[jk]',
                                             pekerjaan = '$_POST[pekerjaan]',
                                            status = '$_POST[status]',
                                            alamat_rmh = '$_POST[alamat_rmh]',
                                            nip_nup = '$_POST[nip_nup]',
                                                    file       = '$namabaru9'
                                                WHERE id_keluarga ='$_POST[id_keluarga]'");
     echo "
            <script type='text/javascript'>
              alert('Ubah Data berhasil..');
              window.location = '../keluarga.php?nip_nup=$_GET[nip_nup]';
            </script>
          ";
        }else{

          echo "
            <script type='text/javascript'>
              alert('Ukuran File Terlalu Besar!');
              window.location = 'ubah_keluarga.php?id_keluarga=$_GET[id_keluarga]';
            </script>
          ";
        }
  }
?>