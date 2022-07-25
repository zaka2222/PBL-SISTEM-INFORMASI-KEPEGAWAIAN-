<?php
include "../koneksi.php";
session_start();

$nip_nup = $_POST['nip_nup'];
$notif_pend = $_POST['notif_pend'];


$koneksi->query("UPDATE riwayat_pendidikan SET notif_pend ='$_POST[notif_pend]' WHERE nip_nup='$_POST[nip_nup]'");

header("location: pendidikan.php?nip_nup=$_GET[nip_nup]");
?>
