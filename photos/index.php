<?php
  require_once("/nfs/c06/h04/mnt/157266/domains/www.team2342.org/html/structure/Mobile_Detect.php");
  $detect = new Mobile_Detect;
  $thispage = "photos";
  include($_SERVER["DOCUMENT_ROOT"]."/structure/mobile-detection.php");
  
  $noscript1 = "images.zip";
  $noscript2 = " download";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php include($_SERVER["DOCUMENT_ROOT"]."/structure/head.php"); ?>
    <title>Photos | Team 2342</title>
  </head>
  <body>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/header.php"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/menu.php"); ?>
	<div id="content">
	  <div>
		<h1>Photos</h1>
		<p>&nbsp;</p>
		<?php if($noscript == true) : ?><p>Photo viewer requires JavaScript, please <a href="http://www.enable-javascript.com" target="_blank">enable JavaScript</a>. Alternatively, the albums can be downloaded below.</p><p>&nbsp;</p><?php endif; ?>
		<h2>2016 Season Photos</h2>
		<ul>
		  <li><a href="/photos/2016/sep/<?php echo $noscript1 ?>"<?php echo $noscript2 ?>>September</a></li>
		  <li><a href="/photos/2016/oct/<?php echo $noscript1 ?>"<?php echo $noscript2 ?>>October</a></li>
		  <li><a href="/photos/2016/fll/<?php echo $noscript1 ?>"<?php echo $noscript2 ?>>FLL Qualifier</a></li>
		  <li><a href="/photos/2016/nov/<?php echo $noscript1 ?>"<?php echo $noscript2 ?>>November</a></li>
		  <li><a href="/photos/2016/mini-build/<?php echo $noscript1 ?>"<?php echo $noscript2 ?>>Mini-Build Season</a></li>
		  <li><a href="/photos/2016/jan/<?php echo $noscript1 ?>"<?php echo $noscript2 ?>>January</a></li>
		  <li><a href="/photos/2016/feb/<?php echo $noscript1 ?>"<?php echo $noscript2 ?>>February</a></li>
		</ul>
		<p>&nbsp;</p>
		<h2>2014 Season Photos</h2>
		<ul>
		  <li><a href="/photos/2014/ptde/<?php echo $noscript1 ?>"<?php echo $noscript2 ?>>Pine Tree District Event</a></li>
		  <li><a href="/photos/2014/gsde/<?php echo $noscript1 ?>"<?php echo $noscript2 ?>>Granite State District Event</a></li>
		  <li><a href="/photos/2014/build-season/<?php echo $noscript1 ?>"<?php echo $noscript2 ?>>Build Season</a></li>
		  <li><a href="/photos/2014/training/<?php echo $noscript1 ?>"<?php echo $noscript2 ?>>Training</a></li>
		  <li><a href="/photos/2014/fll-tournament/<?php echo $noscript1 ?>"<?php echo $noscript2 ?>>FLL Tournament</a></li>
		</ul>
		<p>&nbsp;</p>
		<h2>2013 Season Photos</h2>
		<ul>
		  <li><a href="/photos/2013/battlecry/<?php echo $noscript1 ?>"<?php echo $noscript2 ?>>BattleCry @ WPI Competition</a></li>
		  <li><a href="/photos/2013/gsr/<?php echo $noscript1 ?>"<?php echo $noscript2 ?>>Granite State Regional Competition</a></li>
		  <li><a href="/photos/2013/building-robot/<?php echo $noscript1 ?>"<?php echo $noscript2 ?>>Building Robot</a></li>
		  <li><a href="/photos/2013/prototyping/<?php echo $noscript1 ?>"<?php echo $noscript2 ?>>Prototyping</a></li>
		  <li><a href="/photos/2013/bn/<?php echo $noscript1 ?>"<?php echo $noscript2 ?>>Barnes & Noble Fundraiser</a></li>
		  <li><a href="/photos/2013/fairgrounds-elementary/<?php echo $noscript1 ?>"<?php echo $noscript2 ?>>Fairgrounds Elementary Recruiting</a></li>
		  <li><a href="/photos/2013/bake-sale/<?php echo $noscript1 ?>"<?php echo $noscript2 ?>>Bake Sale Fundraiser</a></li>
		</ul>
	  </div>
	</div>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/footer.php"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/copyright.php"); ?>
  </body>
</html>