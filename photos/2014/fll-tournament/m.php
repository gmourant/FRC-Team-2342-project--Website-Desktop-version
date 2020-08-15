<?php
  require_once("/nfs/c06/h04/mnt/157266/domains/www.team2342.org/html/structure/Mobile_Detect.php");
  $detect = new Mobile_Detect;
  include($_SERVER["DOCUMENT_ROOT"]."/photos/mobile--redirection.php");
  
  include($_SERVER["DOCUMENT_ROOT"]."/photos/mobile--doc.php");
?>