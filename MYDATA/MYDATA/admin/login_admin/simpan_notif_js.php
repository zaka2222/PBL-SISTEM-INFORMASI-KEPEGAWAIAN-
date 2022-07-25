<?php
include "../koneksi.php";
session_start();

$nip_nup = $_POST['nip_nup'];
$notif_js = $_POST['notif_js'];


$koneksi->query("UPDATE riwayat_jabatan_struktural SET notif_js ='$_POST[notif_js]' WHERE nip_nup='$_POST[nip_nup]'");

header("location: pilih_riwayat/riwayat_jabatan_st_tt.php?nip_nup=$_GET[nip_nup]");
?>
