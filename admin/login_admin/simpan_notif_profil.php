<?php
include "../koneksi.php";
session_start();

$nip_nup = $_POST['nip_nup'];
$notif_profil = $_POST['notif_profil'];


$koneksi->query("UPDATE data_pegawai SET notif_profil ='$_POST[notif_profil]' WHERE nip_nup='$_POST[nip_nup]'");

header("location: index.php?nip_nup=$_GET[nip_nup]");
?>
