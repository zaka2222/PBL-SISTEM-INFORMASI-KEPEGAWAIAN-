<?php 
  include "../koneksi.php";

  error_reporting(0);
  $foto_pegawai   = $_FILES['foto_pegawai']['name'];
  $nip_nup = $_POST['nip_nup'];
  $notif_foto = $_POST['notif_foto'];

$baru = $nip_nup."-".$foto_pegawai;

$rand = rand();
$ekstensi =  array('jpeg','jpg');
$filename = $_FILES['foto_pegawai']['name'];
$ukuran = $_FILES['foto_pegawai']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
  echo "
    <script type='text/javascript'>
      alert('Format Foto hanya bisa JPEG/JPG!');
      window.location = 'index_2.php';
    </script>
  ";
}else{

  // Apabila foto_pegawai tidak diganti
  if (empty($foto_pegawai)){
    $koneksi->query("UPDATE data_pegawai SET 
                                              notif_foto ='$_POST[notif_foto]'
                                              WHERE nip_nup = '$_POST[nip_nup]'");

  }else{

    if($ukuran < 1000000){

    $hapus= $koneksi->query("SELECT * FROM data_pegawai WHERE nip_nup='$_POST[nip_nup]'");
    // menghapus foto_pegawai yang lama
    $nama_gambar=mysqli_fetch_array($hapus);
    // nama field foto_pegawai
    $lokasi=$nama_gambar['foto_pegawai'];

    // alamat tempat foto_pegawai
    $hapus_gambar="img/foto_pegawai/$lokasi";
    // script untuk menghapus foto_pegawai dari folder
    unlink($hapus_gambar);
    move_uploaded_file($_FILES['foto_pegawai']['tmp_name'],'img/foto_pegawai/'.$baru);
    $koneksi->query("UPDATE data_pegawai SET 
                                                          notif_foto ='$_POST[notif_foto]',
                                                          foto_pegawai       = '$baru'
								                              WHERE nip_nup = '$_POST[nip_nup]'");
  echo "
            <script type='text/javascript'>
              alert('Berhasil..');
              window.location = 'index.php';
            </script>
          ";
        }else{

          echo "
            <script type='text/javascript'>
              alert('Ukuran File Terlalu Besar!');
              window.location = 'index_2.php';
            </script>
          ";
        }
  }
}
?>