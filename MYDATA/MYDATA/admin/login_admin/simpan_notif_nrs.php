<?php
include "../koneksi.php";
session_start();

$nip_nup = $_POST['nip_nup'];
$notif_nrs = $_POST['notif_nrs'];


$koneksi->query("UPDATE no_reg_serdos SET notif_nrs ='$_POST[notif_nrs]' WHERE nip_nup='$_POST[nip_nup]'");

header("location: pilih_riwayat/sk_mutasi.php?nip_nup=$_GET[nip_nup]");
?>
