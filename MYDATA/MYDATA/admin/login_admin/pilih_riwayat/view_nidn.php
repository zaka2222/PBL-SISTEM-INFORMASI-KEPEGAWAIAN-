<?php
if(ISSET($_REQUEST['file_nidn'])){
  $file_nidn = $_REQUEST['file_nidn'];
  
    //header("Cache-Control: public");
    //header("Content-Description: File Transfer");
  header("Content-Type: application/pdf;");
    //header("Content-Transfer-Encoding: binary");
  readfile("../riwayat/file_nidn/".$file_nidn);
}
?>