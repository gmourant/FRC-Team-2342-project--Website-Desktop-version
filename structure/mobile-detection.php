<?php
if ($photos == true) {
   $dest = "m.php";
} else {
   $dest = "http://m.team2342.org/$thispage";
}

if ($detect->isMobile() && !$detect->isTablet()) { header("Location: $dest"); }
?>