<?php
include "../koneksi.php";
session_start();

$nip_nup = $_POST['nip_nup'];
$notif_kel = $_POST['notif_kel'];


$koneksi->query("UPDATE data_keluarga SET notif_kel ='$_POST[notif_kel]' WHERE nip_nup='$_POST[nip_nup]'");

header("location: keluarga.php?nip_nup=$_GET[nip_nup]");
?>
