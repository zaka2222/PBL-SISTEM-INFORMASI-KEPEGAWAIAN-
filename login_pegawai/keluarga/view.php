<?php
if(ISSET($_REQUEST['file'])){
  $file = $_REQUEST['file'];
  
    //header("Cache-Control: public");
    //header("Content-Description: File Transfer");
  header("Content-Type: application/pdf;");
    //header("Content-Transfer-Encoding: binary");
  readfile("file/".$file);
}
?>