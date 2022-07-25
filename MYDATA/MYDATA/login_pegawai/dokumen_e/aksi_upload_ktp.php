<?php 
  include "../../koneksi.php";

  error_reporting(0);
  $file_ktp   = $_FILES['file_ktp']['name'];
  $nip_nup = $_POST['nip_nup'];
  $nama_pegawai = $_POST['nama_pegawai'];

$namabaru1 =$nip_nup."-".$nama_pegawai."-".$file_ktp;

$rand = rand();
$ekstensi =  array('pdf');
$filename = $_FILES['file_ktp']['name'];
$ukuran = $_FILES['file_ktp']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
  echo "
    <script type='text/javascript'>
      alert('Format Berkas hanya bisa PDF!');
      window.location = 'pribadi.php';
    </script>
  ";
}else{
  // Apabila file_ktp tidak diganti
  if (empty($file_ktp)){
    $koneksi->query("UPDATE data_pegawai WHERE nip_nup = '$_POST[nip_nup]'");

  }else{

    if($ukuran < 5000000){

        $hapus= $koneksi->query("SELECT * FROM data_pegawai WHERE nip_nup='$_POST[nip_nup]'");
        // menghapus file_ktp yang lama
        $nama_gambar=mysqli_fetch_array($hapus);
        // nama field file_ktp
        $lokasi=$nama_gambar['file_ktp'];

        // alamat tempat file_ktp
        $hapus_gambar="pribadi/KTP/$lokasi";
        // script untuk menghapus file_ktp dari folder
        unlink($hapus_gambar);
        move_uploaded_file($_FILES['file_ktp']['tmp_name'],'pribadi/KTP/'.$namabaru1);
        $koneksi->query("UPDATE data_pegawai SET 
                                                              file_ktp       = '$namabaru1'
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