<?php
  require_once("/nfs/c06/h04/mnt/157266/domains/www.team2342.org/html/structure/Mobile_Detect.php");
  $detect = new Mobile_Detect;
  $thispage = "";
  include($_SERVER["DOCUMENT_ROOT"]."/structure/mobile-detection.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php include($_SERVER["DOCUMENT_ROOT"]."/structure/head.php"); ?>
	<meta name="description" content="FIRST Robotics Team 2342 – Team Phoenix is a regional FIRST Robotics team not solely aligned with a school.">
    <meta name="keywords" content="first,robotics,robot,science,technology,engineering,team,2342,phoenix,nashua,club">
    <title>Phoenix Robotics | Team 2342</title>
  </head>
  <body>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/header.php"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/menu.php"); ?>
	<div id="content">
	  <div>
		<iframe src="<?php if ($noscript == true) {echo "/slider2/cssslider.html";} else {echo "/slider/";} ?>" style="width:960px;height:360px;max-width:100%;overflow:hidden;border:none;padding:0;margin:0 auto;display:block;" marginheight="0" marginwidth="0"></iframe>
		<p>&nbsp;</p>
		<table cellpadding="0" cellspacing="0" width="100%" id="home">
		  <tr>
			<td>
			  <h2>Welcome!</h2>
			  <p>Team Phoenix is a group of students from the greater Nashua, New Hampshire area who participate annually in the FIRST Robotics Competition (FRC) since 2008. Unlike most other FRC teams, we do not have a single school affiliation – the majority of our students come from home school groups, private schools, and the Academy for Science and Design. Our team is student run and operated. Our mentors provide us insight and guidance, but the majority of the work is done by us, the students.<br><br>Students come to our team interested in learning CAD software, how to operate shop machines, program, wire, and work in a team environment. Those who have moved on to college leave with a solid education from what they chose on the team. We are known as a team with endless creativity who build unique robots each season. If you are interested in joining our community, click here to learn more about FIRST. </p>
			</td>
		    <td>
			  <a href="/first/<?php echo $addnoscript ?>"><h2>What is FIRST?</h2></a>
			  <p>&nbsp;</p>
			  <a href="/about/<?php echo $addnoscript ?>"><h2>What is Team 2342?</h2></a>
			  <p>&nbsp;</p>
			  <a href="/first/<?php echo $addnoscript ?>#frc"><h2>What is FRC?</h2></a>
			  <p>&nbsp;</p>
			  <a href="http://youtu.be/VqOKzoHJDjA" target="_blank"><h2>2016 Game Tutorial</h2></a>
			  <p>&nbsp;</p>
			  <a href="http://eepurl.com/MC0m9"><h2>Subscribe to our Newsletter</h2></a>
			</td>
			<td<?php if($noscript == false) : ?> onclick="window.location='/events/'" style="cursor:pointer"<?php endif; ?>>
			  <?php include("/nfs/c06/h04/mnt/157266/domains/www.team2342.org/html/events/processor.php"); ?>
			  <a href="/events/<?php echo $addnoscript ?>" class="link-no">
			    <h2>Upcoming Events</h2>
			    <ul>
				  <?php events("dp"); ?>
			    </ul>
			  </a>
			</td>
		  </tr>
		</table>
		<p>&nbsp;</p>
		<a href="/sponsors/<?php echo $addnoscript ?>" class="link-no">
			    <h2>Our Sponsors</h2>
			    <table width="100%" id="home-sponsors">
			      <tr>
				    <td><img src="/images/sponsor-logos/kentico.jpg" alt="Kentico Logo"></td>
				    <td><img src="/images/sponsor-logos/dwc.jpg" alt="Daniel Webster College Logo"></td>
				    <td><img src="/images/sponsor-logos/intel.jpg" alt="Intel Logo"></td>
				    <td><img src="/images/sponsor-logos/amazon-robotics.jpg" alt="Amazon Robotics Logo"></td>
				  </tr>
				  <tr>
				    <td><img src="/images/sponsor-logos/bae-systems.jpg" alt="BAE Systems Logo"></td>
					<td><img src="/images/sponsor-logos/brecoflex.png" alt="BRECOflex Logo"></td>
					<td><img src="/images/sponsor-logos/mathworks.png" alt="MathWorks Logo"></td>
				    <td><img src="/images/sponsor-logos/raytheon.jpg" alt="Raytheon Logo"></td>
				  </tr>
				  <tr>
					<td><img src="/images/sponsor-logos/rapid-sheet-metal.png" alt="Rapid Sheet Metal Logo"></td>
					<td><img src="/images/sponsor-logos/solidworks.jpg" alt="SolidWorks Logo"></td>
					<td><img src="/images/sponsor-logos/solidscape.jpg" alt="Solidscape Logo"></td>
					<td><img src="/images/sponsor-logos/rapid-machining.png" alt="Solidscape Logo"></td>
				  </tr>
			    </table>
			  </a>
		<p>&nbsp;</p>
		<table cellpadding="0" cellspacing="0" width="100%">
		  <tr>
		    <td id="news">
			  <h2><a href="http://blog.team2342.org/">Latest Blog Posts</a> <a href="http://blog.team2342.org/feeds/posts/default" target="_blank"><img src="http://www.team2342.org/images/rss.png" alt="Atom Feed" title="Atom Feed" width="16" height="16"></a></h2>
<?php if($noscript == false) : ?>
<script type="text/javascript">
<!--
rssmikle_url="http://blog.team2342.org/feeds/posts/default";
rssmikle_frame_width="450";
rssmikle_frame_height="300";
rssmikle_target="_parent";
rssmikle_font="Arial, Helvetica, sans-serif";
rssmikle_font_size="12";
rssmikle_border="on";
responsive="off";
rssmikle_css_url="";
text_align="left";
corner="off";
autoscroll="off";
scrolldirection="up";
scrollstep="3";
mcspeed="20";
sort="New";
rssmikle_title="off";
rssmikle_title_sentence="";
rssmikle_title_link="";
rssmikle_title_bgcolor="#FF0000";
rssmikle_title_color="#FFFFFF";
rssmikle_title_bgimage="";
rssmikle_item_bgcolor="#FFFFFF";
rssmikle_item_bgimage="";
rssmikle_item_title_length="55";
rssmikle_item_title_color="#000000";
rssmikle_item_border_bottom="on";
rssmikle_item_description="on";
rssmikle_item_description_length="150";
rssmikle_item_description_color="#000000";
rssmikle_item_date="off";
rssmikle_timezone="Etc/GMT";
datetime_format="%b %e, %Y %l:%M:%S %p";
rssmikle_item_description_tag="off";
rssmikle_item_podcast="off";
(function() {
var src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'feed.mikle.com/js/rssmikle.js';
document.write('<script type="text/javascript" src="' + src + '"><\/script>');
})();
//-->
</script>
<?php endif; ?>
<?php if($noscript == true) : ?><p>Lastest Blog Posts requires JavaScript to run. Please <a href="http://www.enable-javascript.com" target="_blank">enable JavaScript</a> or visit the blog directly at <a href="http://blog.team2342.org">blog.team2342.org</a>.</p><?php endif; ?>
<?php if($noscript == false) : ?><p style="color:grey;"><small>Powered by <a href="http://feed.mikle.com/" target="_blank" style="color:grey;">FeedWind</a></small></p><?php endif; ?>
			</td>
			<td id="news">
				<h2><a href="http://www.facebook.com/GreaterNashuaRoboticsTeam2342">Facebook</a></h2>
				<span id="fb-root"></span>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
				<span data-width="450" data-height="300" class="fb-page" data-href="https://www.facebook.com/GreaterNashuaRoboticsTeam2342" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false"><span class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/GreaterNashuaRoboticsTeam2342"><a href="http://www.facebook.com/GreaterNashuaRoboticsTeam2342" class="link-no pointer-no">Loading...</a></blockquote></span></span>
			</td>
		  </tr>
		</table>
	  </div>
	</div>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/footer.php"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/copyright.php"); ?>
  </body>
</html>