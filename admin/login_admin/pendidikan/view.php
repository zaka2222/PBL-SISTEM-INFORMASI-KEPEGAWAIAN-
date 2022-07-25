<?php
if(ISSET($_REQUEST['file_ijazah'])){
  $file_ijazah = $_REQUEST['file_ijazah'];
  
    //header("Cache-Control: public");
    //header("Content-Description: File Transfer");
  header("Content-Type: application/pdf;");
    //header("Content-Transfer-Encoding: binary");
  readfile("../../../login_pegawai/pendidikan/file_ijazah/".$file_ijazah);
}
?>