<?php 
  include "../../koneksi.php";

  error_reporting(0);
  $file_kk   = $_FILES['file_kk']['name'];
  $nip_nup = $_POST['nip_nup'];
  $nama_pegawai = $_POST['nama_pegawai'];

  $namabaru2 =$nip_nup."-".$nama_pegawai."-".$file_kk;

$rand = rand();
$ekstensi =  array('pdf');
$filename = $_FILES['file_kk']['name'];
$ukuran = $_FILES['file_kk']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
  echo "
    <script type='text/javascript'>
      alert('Format Berkas hanya bisa PDF!');
      window.location = 'pribadi.php';
    </script>
  ";
}else{
  // Apabila file_kk tidak diganti
  if (empty($file_kk)){
    $koneksi->query("UPDATE data_pegawai WHERE nip_nup = '$_POST[nip_nup]'");

  }else{

    if($ukuran < 5000000){

    $hapus= $koneksi->query("SELECT * FROM data_pegawai WHERE nip_nup='$_POST[nip_nup]'");
    // menghapus file_kk yang lama
    $nama_gambar=mysqli_fetch_array($hapus);
    // nama field file_kk
    $lokasi=$nama_gambar['file_kk'];

    // alamat tempat file_kk
    $hapus_gambar="pribadi/KK/$lokasi";
    // script untuk menghapus file_kk dari folder
    unlink($hapus_gambar);
    move_uploaded_file($_FILES['file_kk']['tmp_name'],'pribadi/KK/'.$namabaru2);
    $koneksi->query("UPDATE data_pegawai SET 
                                                          file_kk       = '$namabaru2'
								                              WHERE nip_nup = '$_POST[nip_nup]'");
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