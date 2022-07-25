<?php
include "../koneksi.php";
session_start();

$nip_nup = $_POST['nip_nup'];
$notif_gol = $_POST['notif_gol'];


$koneksi->query("UPDATE golongan SET notif_gol ='$_POST[notif_gol]' WHERE nip_nup='$_POST[nip_nup]'");

header("location: pilih_riwayat/gol_pang.php?nip_nup=$_GET[nip_nup]");
?>
