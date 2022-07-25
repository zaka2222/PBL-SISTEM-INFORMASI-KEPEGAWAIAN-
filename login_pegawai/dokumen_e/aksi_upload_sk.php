<?php 
  include "../../koneksi.php";

  error_reporting(0);
  $file_sk   = $_FILES['file_sk']['name'];
  $nip_nup = $_POST['nip_nup'];
  $id_sk = $_POST['id_sk'];
  $nama_pegawai = $_POST['nama_pegawai'];
  $jenis_sk = $_POST['jenis_sk'];

  $namabaru2 =$nip_nup."-".$nama_pegawai."-".$jenis_sk."-".$file_sk;

$rand = rand();
$ekstensi =  array('pdf');
$filename = $_FILES['file_sk']['name'];
$ukuran = $_FILES['file_sk']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
  echo "
    <script type='text/javascript'>
      alert('Format Berkas hanya bisa PDF!');
      window.location = 'riwayat.php';
    </script>
  ";
}else{
  // Apabila file_sk tidak diganti
  if (empty($file_sk)){
    $koneksi->query("UPDATE data_sk WHERE id_sk = '$_POST[id_sk]'");

  }else{

    if($ukuran < 5000000){

    $hapus= $koneksi->query("SELECT * FROM data_sk WHERE id_sk='$_POST[id_sk]'");
    // menghapus file_sk yang lama
    $nama_gambar=mysqli_fetch_array($hapus);
    // nama field file_sk
    $lokasi=$nama_gambar['file_sk'];

    // alamat tempat file_sk
    $hapus_gambar="../riwayat/file_sk/$lokasi";
    // script untuk menghapus file_sk dari folder
    unlink($hapus_gambar);
    move_uploaded_file($_FILES['file_sk']['tmp_name'],'../riwayat/file_sk/'.$namabaru2);
    $koneksi->query("UPDATE data_sk SET 
                                                          file_sk       = '$namabaru2'
								                              WHERE id_sk = '$_POST[id_sk]'");
  echo "
            <script type='text/javascript'>
              alert('Berhasil');
              window.location = 'riwayat.php';
            </script>
          ";
        }else{

          echo "
            <script type='text/javascript'>
              alert('Ukuran File Terlalu Besar!');
              window.location = 'riwayat.php';
            </script>
          ";
        }
  }
}
?>