<?php
if(ISSET($_REQUEST['file_ktp'])){
  $file_ktp = $_REQUEST['file_ktp'];
  
    //header("Cache-Control: public");
    //header("Content-Description: File Transfer");
  header("Content-Type: application/pdf;");
    //header("Content-Transfer-Encoding: binary");
  readfile("pribadi/KTP/".$file_ktp);
}
?>