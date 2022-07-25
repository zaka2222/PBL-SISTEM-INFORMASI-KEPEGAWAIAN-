<?php
include "../koneksi.php";
session_start();

$nip_nup = $_POST['nip_nup'];
$notif_jaf = $_POST['notif_jaf'];


$koneksi->query("UPDATE riwayat_jabatan_aka_fung SET notif_jaf ='$_POST[notif_jaf]' WHERE nip_nup='$_POST[nip_nup]'");

header("location: pilih_riwayat/riwayat_jabatan_aka_fung.php?nip_nup=$_GET[nip_nup]");
?>
