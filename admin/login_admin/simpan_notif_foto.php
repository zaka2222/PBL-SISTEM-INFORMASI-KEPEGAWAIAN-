<?php
include "../koneksi.php";
session_start();

$nip_nup = $_POST['nip_nup'];
$notif_foto = $_POST['notif_foto'];


$koneksi->query("UPDATE data_pegawai SET notif_foto ='$_POST[notif_foto]' WHERE nip_nup='$_POST[nip_nup]'");

header("location: index.php?nip_nup=$_GET[nip_nup]");
?>
