<?php
if(ISSET($_REQUEST['file_nrs'])){
  $file_nrs = $_REQUEST['file_nrs'];
  
    //header("Cache-Control: public");
    //header("Content-Description: File Transfer");
  header("Content-Type: application/pdf;");
    //header("Content-Transfer-Encoding: binary");
  readfile("../riwayat/file_nrs/".$file_nrs);
}
?>