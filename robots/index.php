<?php
  require_once("/nfs/c06/h04/mnt/157266/domains/www.team2342.org/html/structure/Mobile_Detect.php");
  $detect = new Mobile_Detect;
  $thispage = "robot";
  include($_SERVER["DOCUMENT_ROOT"]."/structure/mobile-detection.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php include($_SERVER["DOCUMENT_ROOT"]."/structure/head.php"); ?>
    <title>Robots | Team 2342</title>
  </head>
  <body>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/header.php"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/menu.php"); ?>
	<div id="content">
	  <div>
	     <h2>2015 Robot: Recyclone</h2>
		 <a href="/images/2015-robot-photo.png" target="_blank"><img src="/images/2015-robot-photo.png" id="robot-photo" alt="Robot Photo"></a>
		 <p class="b">Features:</p>
		 <ul>
		    <li>Tote/container lifting mechanism</li>
			<li>2 hooks for lifting mechanism</li>
			<li>4 wheel mecanum drive train</li>
			<li>4 drive train CIM motors</li>
		 </ul>
		 <p>&nbsp;</p>
		 <p class="b">Capabilities:</p>
		 <ul>
		    <li>Carry up to 5 totes</li>
			<li>Carry 1 container & 2 totes</li>
			<li>Place stack on both scoring platform and step</li>
			<li>Move in any direction without turning (mecanum)</li>
		 </ul>
		 <p>&nbsp;</p>
		 <p class="b">Autonomous Modes:</p>
		 <ul>
		    <li>(Do nothing)</li>
			<li>Move into Auto Zone</li>
			<li title="Referred to as Simple Autonomous">Pickup 1 tote, move foward into Auto Zone and place tote</li>
			<li title="Referred to as Complex Autonomous" class="b">Pickup all 3 yellow totes and place stack in Auto Zone<br><a href="http://youtu.be/1xWx5X5SdVo" target="_blank">See it in Action! (Video)</a></li>
		 </ul>
		 <p>&nbsp;</p>
		 <h2>2014 Robot: Darth M.O.L.</h2>
		 <a href="/images/2014-robot-photo.png" target="_blank"><img src="/images/2014-robot-photo.jpg" id="robot-photo" alt="Robot Photo"></a>
		 <p class="b">Features:</p>
		 <ul>
		    <li>Shooting mechanism</li>
			<li>Claws for grabbing</li>
			<li>Automatic range finding</li>
			<li>2 CIM motors for drivetrain</li>
			<li>6 wheel drivetrain with 2 wheel types</li>
			<li>4 omni wheels for zero turning radius</li>
		 </ul>
		 <p>&nbsp;</p>
		 <p class="b">Capabilities:</p>
		 <ul>
		    <li>Robot can shoot in high goal, low goal and over the truss</li>
			<li>Can pick up ball from ground without aid</li>
			<li>More than 180° range of motion on shooter</li>
			<li>Max shooting speed 27.5 feet/second</li>
			<li>Catch/receive ball</li>
			<li>Autonomous includes moving and shooting in high goal</li>
		 </ul>
	  </div>
	</div>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/footer.php"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/copyright.php"); ?>
  </body>
</html>