<?php
include "../koneksi.php";
session_start();

$nip_nup = $_POST['nip_nup'];
$notif_diklat = $_POST['notif_diklat'];


$koneksi->query("UPDATE riwayat_diklat SET notif_diklat ='$_POST[notif_diklat]' WHERE nip_nup='$_POST[nip_nup]'");

header("location: pilih_riwayat/riwayat_diklat.php?nip_nup=$_GET[nip_nup]");
?>
