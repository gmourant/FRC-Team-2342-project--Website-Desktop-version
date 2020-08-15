<?php
  require_once("/nfs/c06/h04/mnt/157266/domains/www.team2342.org/html/structure/Mobile_Detect.php");
  $detect = new Mobile_Detect;
  $thispage = "videos";
  include($_SERVER["DOCUMENT_ROOT"]."/structure/mobile-detection.php");
  
  $noscript1 = " Please <a href='http://www.enable-javascript.com/' target='_blank'>enable JavaScript</a> to view videos on this page.";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php include($_SERVER["DOCUMENT_ROOT"]."/structure/head.php"); ?>
    <title>Videos | Team 2342</title>
  </head>
  <body>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/header.php"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/menu.php"); ?>
	<div id="content">
	  <div>
		<h1>Videos</h1>
		<p>&nbsp;</p>
		<p>All videos are posted on <a href="http://www.youtube.com/team2342" target="_blank">our YouTube Channel</a>.<?php echo $noscript1 ?></p>
		<p>&nbsp;</p>
		<p>For match videos, please see <a href="http://www.thebluealliance.com/team/2342#event-results" target="_blank">our page at the Blue Alliance</a>. Look for <img src="/videos/BA-video-icon.png"> icon next to the match number under the event heading.</p>
	  </div>
	</div>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/footer.php"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/copyright.php"); ?>
  </body>
</html>