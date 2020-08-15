<?php
  require_once("/nfs/c06/h04/mnt/157266/domains/www.team2342.org/html/structure/Mobile_Detect.php");
  $detect = new Mobile_Detect;
  include($_SERVER["DOCUMENT_ROOT"]."/photos/desktop--redirection.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php
	  include("titles.php");
	  $title = "Photos &ndash; ".$event." (".$year." Season)";
	  include($_SERVER["DOCUMENT_ROOT"]."/structure/head.php");
	?>
    <title><?php echo basename($title, " Season)").") | Team 2342" ?></title>
  </head>
  <body>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/header.php"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/menu.php"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/photos/desktop--content.php"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/footer.php"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/copyright.php"); ?>
  </body>
</html>