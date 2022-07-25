<?php
if(ISSET($_REQUEST['file_ktp'])){
	$file_ktp = $_REQUEST['file_ktp'];
	
		//header("Cache-Control: public");
		//header("Content-Description: File Transfer");
	header("Content-Disposition: attachment; filename=".basename($file_ktp));
	header("Content-Type: application/octet-stream;");
		//header("Content-Transfer-Encoding: binary");
	readfile("../../../login_pegawai/dokumen_e/pribadi/KTP/".$file_ktp);
}
?>