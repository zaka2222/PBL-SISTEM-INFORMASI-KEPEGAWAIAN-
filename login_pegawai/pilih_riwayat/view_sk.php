<?php
if(ISSET($_REQUEST['file_sk'])){
  $file_sk = $_REQUEST['file_sk'];
  
    //header("Cache-Control: public");
    //header("Content-Description: File Transfer");
  header("Content-Type: application/pdf;");
    //header("Content-Transfer-Encoding: binary");
  readfile("../riwayat/file_sk/".$file_sk);
}
?>