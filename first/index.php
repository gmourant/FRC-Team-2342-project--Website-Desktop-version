<?php
  require_once("/nfs/c06/h04/mnt/157266/domains/www.team2342.org/html/structure/Mobile_Detect.php");
  $detect = new Mobile_Detect;
  $thispage = "first";
  include($_SERVER["DOCUMENT_ROOT"]."/structure/mobile-detection.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php include($_SERVER["DOCUMENT_ROOT"]."/structure/head.php"); ?>
    <title>FIRST | Team 2342</title>
  </head>
  <body>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/header.php"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/menu.php"); ?>
	<div id="content">
	  <div>
		<img src="/images/first-vert.png" id="first-logo-vert" alt="FIRST Logo">
		<h1>About FIRST</h1>
		<p><b>F</b>or <b>I</b>nspiration and <b>R</b>ecognition of <b>S</b>cience and <b>T</b>echnology</p>
		<h3><a href="http://www.firstinspires.org/robotics/frc" target="_blank">www.FIRSTinspires.org</a></h3>
		<p>&nbsp;</p>
		<h3>FIRST Mission</h3>
		<p>FIRST aims to inspire young people to be science and technology leaders, by engaging them in exciting mentor-based programs that build science, engineering and technology skills, that inspire innovation, and that foster well-rounded life capabilities including self-confidence, communication, and leadership.</p>
		<p>&nbsp;</p>
		<p class="indent"><i>"To transform our culture by creating a world where science and technology are celebrated and where young people dream of becoming science and technology leaders."</i><br>-Dean Kamen, Founder of FIRST</p>
		<?php if($noscript == false) : ?><iframe id="first-video" src="http://www.youtube.com/embed/hcS7M4sY0fQ" frameborder="0" allowfullscreen></iframe><?php endif; ?>
		<p>&nbsp;</p>
		<p id="frc">Described by its founder as "the varsity sport for the mind", the FIRST Robotics Competition (FRC) is the highest and most challenging of the FIRST Robotics programs. Teams of 20 or more students (and professional mentors) are challenged to not only build a robot to complete “the challenge”, but also to market, fundraise and organize their teams - all in a six week time period. "It's as close to real-world engineering that the student can get," including all the constraints of a real-world engineering project.</p>
		<p>&nbsp;</p>
		<?php if($noscript == true) : ?>
		<a href="http://youtu.be/hcS7M4sY0fQ" target="_blank"><h3>What's the FIRST Robotics Competition? &ndash; Video</h3></a>
		<p>&nbsp;</p>
		<?php endif; ?>
		<h3>Advantages of FIRST for Students</h3>
		<ul>
		  <li>Learn from professional engineers (and other professions)</li>
		  <li>Build and compete with a robot of their own design</li>
		  <li>Learn and use sophisticated software and hardware</li>
		  <li>Compete and cooperate in alliances and tournaments</li>
		  <li>Earn a place in the World Championship</li>
		  <li>Qualify for nearly $14.8 million in college scholarships</li>
		</ul>
		<p>&nbsp;</p>
		<h3 class="center">All of the FIRST programs are free for all students</h3>
	  </div>
	</div>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/footer.php"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/copyright.php"); ?>
  </body>
</html>