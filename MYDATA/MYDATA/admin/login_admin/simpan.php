<?php
include "../koneksi.php";
session_start();

$ganti_sandi = $_POST['ganti_sandi'];


$koneksi->query("UPDATE data_pegawai SET ganti_sandi ='$_POST[ganti_sandi]'");

header("location: data_pegawai.php");
?>
