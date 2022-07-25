<?php
include "../koneksi.php";
session_start();

$nip_nup = $_POST['nip_nup'];
$jenis_sk = $_POST['jenis_sk'];
$notif_sk = $_POST['notif_sk'];


$koneksi->query("UPDATE data_sk SET notif_sk ='$_POST[notif_sk]' WHERE nip_nup='$_POST[nip_nup]' AND jenis_sk='$_POST[jenis_sk]'");

header("location: pilih_riwayat/sk_capeg_tetap.php?nip_nup=$_GET[nip_nup]");
?>
