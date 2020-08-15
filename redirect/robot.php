<?php
require_once("/nfs/c06/h04/mnt/157266/domains/www.team2342.org/html/structure/Mobile_Detect.php");
$detect = new Mobile_Detect;
if ($detect->isMobile() && !$detect->isTablet()) {
   header("Location: http://m.team2342.org/robot");
} else {
   header("Location: http://www.team2342.org/#robot");
}
?>
