<?php
if(ISSET($_REQUEST['file_sk'])){
	$file_sk = $_REQUEST['file_sk'];
	
		//header("Cache-Control: public");
		//header("Content-Description: File Transfer");
	header("Content-Disposition: attachment; filename=".basename($file_sk));
	header("Content-Type: application/octet-stream;");
		//header("Content-Transfer-Encoding: binary");
	readfile("../../../login_pegawai/riwayat/file_sk/".$file_sk);
}
?>