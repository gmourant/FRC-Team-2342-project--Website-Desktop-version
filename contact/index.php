<?php
  require_once("/nfs/c06/h04/mnt/157266/domains/www.team2342.org/html/structure/Mobile_Detect.php");
  $detect = new Mobile_Detect;
  $thispage = "contact";
  include($_SERVER["DOCUMENT_ROOT"]."/structure/mobile-detection.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php include($_SERVER["DOCUMENT_ROOT"]."/structure/head.php"); ?>
    <title>Contact | Team 2342</title>
  </head>
  <body>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/header.php"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/menu.php"); ?>
	<div id="content">
	  <div style="min-height:350px;">
		<?php if($noscript == false) : ?><iframe class="right" width="625" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d23428.20075950854!2d-71.51393400000002!3d42.777248!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e3b6fb27db5037%3A0xc1253d3d9003cb71!2sDaniel+Webster+Hall%2C+20+University+Dr%2C+Nashua%2C+NH+03063!5e0!3m2!1sen!2sus!4v1419621208665"></iframe><?php endif; ?>
		<h1>Contact Us</h1>
		<p>&nbsp;</p>
		<h3>Meeting Place</h3>
		<p>Daniel Webster College<br>(Daniel Webster Hall, downstairs)<br>20 University Dr.<br>Nashua, NH 03063</p>
		<p>&nbsp;</p>
		<h3>Mailing Address</h3>
		<p>Greater Nashua FIRST Robotics Club<br>38 Wood St.<br>Nashua, NH 03064</p>
		<p>&nbsp;</p>
		<h3>Email</h3>
		<p><a href="mailto:info@team2342.org" target="_blank">info@team2342.org</a></p>
		<p>&nbsp;</p>
		<h3>Phone</h3>
		<p>661-418-PHNX (7469)</p>
	  </div>
	</div>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/footer.php"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/copyright.php"); ?>
  </body>
</html>