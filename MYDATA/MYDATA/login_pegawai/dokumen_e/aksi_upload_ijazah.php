<?php 
  include "../../koneksi.php";

  error_reporting(0);
  $file_ijazah   = $_FILES['file_ijazah']['name'];
  $nip_nup = $_POST['nip_nup'];
  $id_pendidikan = $_POST['id_pendidikan'];
  $nama_pegawai = $_POST['nama_pegawai'];
  $nama_universitas = $_POST['nama_universitas'];

  $namabaru4 =$nip_nup."-".$nama_universitas."-".$file_ijazah;

$rand = rand();
$ekstensi =  array('pdf');
$filename = $_FILES['file_ijazah']['name'];
$ukuran = $_FILES['file_ijazah']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
  echo "
    <script type='text/javascript'>
      alert('Format Berkas hanya bisa PDF!');
      window.location = 'pribadi.php';
    </script>
  ";
}else{
  // Apabila file_ijazah tidak diganti
  if (empty($file_ijazah)){
    $koneksi->query("UPDATE riwayat_pendidikan WHERE id_pendidikan = '$_POST[id_pendidikan]'");

  }else{

    if($ukuran < 5000000){

    $hapus= $koneksi->query("SELECT * FROM riwayat_pendidikan WHERE id_pendidikan='$_POST[id_pendidikan]'");
    // menghapus file_ijazah yang lama
    $nama_gambar=mysqli_fetch_array($hapus);
    // nama field file_ijazah
    $lokasi=$nama_gambar['file_ijazah'];

    // alamat tempat file_ijazah
    $hapus_gambar="../pendidikan/file_ijazah/$lokasi";
    // script untuk menghapus file_ijazah dari folder
    unlink($hapus_gambar);
    move_uploaded_file($_FILES['file_ijazah']['tmp_name'],'../pendidikan/file_ijazah/'.$namabaru4);
    $koneksi->query("UPDATE riwayat_pendidikan SET        nip_nup       = '$nip_nup',
                                                          file_ijazah       = '$namabaru4'
								                              WHERE id_pendidikan = '$_POST[id_pendidikan]'");
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