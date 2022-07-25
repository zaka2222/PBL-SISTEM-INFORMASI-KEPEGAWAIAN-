<?php
$host       = "localhost";
$user       = "root";
$password   = "";
$database   = "1";
$koneksi    = mysqli_connect($host, $user, $password, $database);

if(!$koneksi){
	die("Konkesi Gagal : ".mysql_connect_error());
}
?>