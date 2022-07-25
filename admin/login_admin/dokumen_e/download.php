<?php
if(ISSET($_REQUEST['file_ijazah'])){
	$file_ijazah = $_REQUEST['file_ijazah'];
	
		//header("Cache-Control: public");
		//header("Content-Description: File Transfer");
	header("Content-Disposition: attachment; filename=".basename($file_ijazah));
	header("Content-Type: application/octet-stream;");
		//header("Content-Transfer-Encoding: binary");
	readfile("../../../login_pegawai/pendidikan/file_ijazah/".$file_ijazah);
}
?>