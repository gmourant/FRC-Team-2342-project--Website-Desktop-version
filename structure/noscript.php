<?php
  $noscript = $_REQUEST['noscript'];
  if ($noscript != true) {
    echo "<noscript> <meta http-equiv='refresh' content='0; URL=?noscript=true'> </noscript>";
    $noscript = false;
    $noscript1 = "";
    $noscript2 = "";
    $noscript3 = "";
    $noscript4 = "";
    $noscript5 = "";
  }
  $addnoscript = "";
  if ($noscript == true) {$addnoscript = "?noscript=true";}
?>