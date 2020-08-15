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
    <title>Social Media | Team 2342</title>
  </head>
  <body>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/header.php"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/menu.php"); ?>
	<div id="content">
	  <div>
		<h1>Social Media</h1>
		<p>&nbsp;</p>
		<p>Check out our <a href="http://www.facebook.com/GreaterNashuaRoboticsTeam2342" target="_blank">Facebook</a>, <a href="http://www.twitter.com/team2342" target="_blank">Twitter</a>, <a href="http://www.youtube.com/team2342" target="_blank">YouTube</a>, Instagram, <a href="http://team2342.tumblr.com/" target="_blank">Tumblr</a>, Snapchat, and <a href="http://plus.google.com/+Team2342Org" target="_blank">Google+</a>. Members of our team update our social media regularly and the blog at least monthly. We are excited to share our experiences!</p>
		<p>&nbsp;</p>
		<p>
		  <a href="http://www.facebook.com/GreaterNashuaRoboticsTeam2342" target="_blank"><img src="http://www.team2342.org/images/facebook.png" alt="Facebook Page" title="Facebook Page"></a>
		  <a href="http://www.twitter.com/team2342" target="_blank"><img src="http://www.team2342.org/images/twitter.png" alt="Twitter Page" title="Twitter Page"></a>
		  <a href="http://plus.google.com/+Team2342Org" target="_blank"><img src="http://www.team2342.org/images/googleplus.png" alt="Google+ Page" title="Google+ Page"></a>
		  <a href="http://team2342.tumblr.com/" target="_blank"><img src="http://www.team2342.org/images/tumblr.png" alt="Tumblr Page" title="Tumblr Page"></a>
		  <a href="http://blog.team2342.org/"><img src="http://www.team2342.org/images/blogger.png" alt="Blog" title="Blog"></a>
		  <a href="http://www.youtube.com/team2342" target="_blank"><img src="http://www.team2342.org/images/youtube.png" alt="YouTube Channel" title="YouTube Channel"></a>
		  <a href="http://blog.team2342.org/feeds/posts/default" target="_blank"><img src="http://www.team2342.org/images/rss.png" alt="Atom Feed" title="Atom Feed"></a>
		</p>
		<p><b>Instagram handle:</b> <i>team.2342</i>&nbsp;&nbsp;&nbsp;&nbsp;<b>Snapchat handle:</b> <i>team2342</i></p>
		<p>&nbsp;</p>
		<a class="twitter-timeline" href="http://twitter.com/team2342" data-widget-id="703035140197523456">Tweets by @team2342</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		<span id="fb-root"></span>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
		<span width="430" height="600" class="right"><span data-width="430" data-height="600" class="fb-page" data-href="https://www.facebook.com/GreaterNashuaRoboticsTeam2342" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false"><span class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/GreaterNashuaRoboticsTeam2342"><a href="http://www.facebook.com/GreaterNashuaRoboticsTeam2342">Team 2342 : Phoenix Robotics</a></blockquote></span></span></span>
	  </div>
	</div>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/footer.php"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/copyright.php"); ?>
  </body>
</html>