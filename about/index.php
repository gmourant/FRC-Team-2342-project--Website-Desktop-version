<?php
  require_once("/nfs/c06/h04/mnt/157266/domains/www.team2342.org/html/structure/Mobile_Detect.php");
  $detect = new Mobile_Detect;
  $thispage = "about";
  include($_SERVER["DOCUMENT_ROOT"]."/structure/mobile-detection.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php include($_SERVER["DOCUMENT_ROOT"]."/structure/head.php"); ?>
    <title>About | Team 2342</title>
  </head>
  <body>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/header.php"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/menu.php"); ?>
	<div id="content">
	  <div>
		<h2>Who We Are</h2>
		<p>Team 2342 is a group of students from the greater Nashua, New Hampshire area who participate in the <a href="/first/#frc">FIRST Robotics Competition (FRC)</a>. Unlike most other FRC teams, we do not have a single school affiliation &ndash; the majority of our students come from home school groups, private schools, and the Academy for Science and Design. Our team is student run and operated. Our mentors provide insight and guidance, but the majority of the work is done by students. The team works together to design the robot. The mentors help the students throughout the design process and construction. Students leave the team knowing how to use CAD software, operate shop machines, program, wire, and work in a team environment. We are known in the FRC world as a team with unique robots and have been awarded Creativity and Industrial Design Awards at Regional Competitions.</p>
		<p>&nbsp;</p>
		<h2>What We Do</h2>
		<p>During the six week build season our team works together to design, build, wire, and program a robot. However, building robots is not the only thing Team 2342 does. We are very involved with the community and run a variety of events. Every year we sponsor a First Lego League (FLL) Tournament. We train referees, set up for the competition, and then spend a day running the entire event. Team members also design the trophies used at these FLL Tournaments. Another major outreach activity we do is traveling to various schools to give presentations about FIRST and STEM. Students love seeing our robots and are able to ask us questions about engineering &ndash; some of the students we have talked to definitely want to pursue a STEM career.</p>
		<p>&nbsp;</p>
		<h3>Pricing &ndash; FREE!</h3>
		<p>All of the FIRST programs are free for all students. Our team is solely funded by <a href="/sponsors/<?php echo $addnoscript ?>">our sponsors</a>. The only costs are transportation to meetings and events, and bringing/buying lunch for all-day meetings.</p>
		<p>&nbsp;</p>
		<h2>Awards</h2>
		<ul>
		  <li><b>Entrepreneurship Award</b> <i>sponsored by Kleiner Perkins Caufield & Byers</i> &ndash; 2015 UNH District Event</li>
		  <li><b>Industrial Safety Award</b> <i>sponsored by Underwriters Laboratories</i> &ndash; 2015 Granite State District Event</li>
		  <li><b>Judges Award</b> &ndash; 2014 Pine Tree District Event</li>
		  <li><b>Creativity Award</b> <i>sponsored by Xerox</i> &ndash; 2013 BAE Systems Granite State Regional</li>
		  <li><b>Industrial Design Award</b> <i>sponsored by General Motors</i> &ndash; 2012 BAE Systems Granite State Regional</li>
		  <li><b>Rookie All Star Award</b> &ndash; 2008 BAE Systems Granite State Regional</li>
		</ul>
		<p>&nbsp;</p>
		<h2>Team Mission</h2>
		<p class="i">The mission of the team is to provide an accessible, innovative program to build not only science and technology skills and interests, but also self-confidence, leadership, business, and life skills. Based on the FIRST program, the team strives to enhance the learning of science and engineering, respect the values and abilities of various members, inspire innovation, responsibility and teamwork, as well as creating partnerships. When successful, we will be recognized as a FIRST team to emulate.</p>
		<p>&nbsp;</p>
		<h2>Team Record</h2>
		<p>Team 2342’s first year was 2008. That year we attended the BAE Systems Granite State Regional, ranked 14th overall, and won the Rookie All Star Award. That April, we competed in Archimedes Division at the FIRST Championship in Atlanta, GA and ranked 81st. In May, we attended Battlecry 9 @ Worcester Polytechnic Institute (WPI), with a record of 2-6-1. In 2011 we attended the FIRST Championship Newton Division, this time in St. Louis, MO, and ranked 75. In 2012 at the BAE Systems Granite State Regional, ranked 13th overall, and received the Industrial Design Award sponsored by General Motors. In 2013 at the BAE Systems Granite State Regional, ranked 44th overall, and received the Creativity Award sponsored by Xerox. In 2014 at the Granite State District Event the team ranked 24th. In 2014 at the Pine Tree District Event, ranked 36th overall, and received the Judges Award.<br><br><b>Find our full competition statistics at <a href="http://www.thebluealliance.com/team/2342" target="_blank">The Blue Alliance</a>.</b></p>
	  </div>
	</div>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/footer.php"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/copyright.php"); ?>
  </body>
</html>