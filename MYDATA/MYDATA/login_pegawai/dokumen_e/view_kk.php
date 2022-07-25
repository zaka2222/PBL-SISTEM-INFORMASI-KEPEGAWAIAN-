<?php
if(ISSET($_REQUEST['file_kk'])){
  $file_kk = $_REQUEST['file_kk'];
  
    //header("Cache-Control: public");
    //header("Content-Description: File Transfer");
  header("Content-Type: application/pdf;");
    //header("Content-Transfer-Encoding: binary");
  readfile("pribadi/KK/".$file_kk);
}
?>