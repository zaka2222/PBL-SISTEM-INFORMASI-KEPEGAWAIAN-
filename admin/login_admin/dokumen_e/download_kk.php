<?php
if(ISSET($_REQUEST['file_kk'])){
	$file_kk = $_REQUEST['file_kk'];
	
		//header("Cache-Control: public");
		//header("Content-Description: File Transfer");
	header("Content-Disposition: attachment; filename=".basename($file_kk));
	header("Content-Type: application/octet-stream;");
		//header("Content-Transfer-Encoding: binary");
	readfile("../../../login_pegawai/dokumen_e/pribadi/KK/".$file_kk);
}
?>