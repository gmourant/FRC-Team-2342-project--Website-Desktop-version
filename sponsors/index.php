<?php
  require_once("/nfs/c06/h04/mnt/157266/domains/www.team2342.org/html/structure/Mobile_Detect.php");
  $detect = new Mobile_Detect;
  $thispage = "sponsors";
  include($_SERVER["DOCUMENT_ROOT"]."/structure/mobile-detection.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php include($_SERVER["DOCUMENT_ROOT"]."/structure/head.php"); ?>
    <title>Sponsors | Team 2342</title>
  </head>
  <body>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/header.php"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/menu.php"); ?>
	<div id="content">
	  <div>
		<a href="/donate/" class="right" id="subscribe" title="Please Consider Sponsorship">Please Consider Sponsorship</a>
		<h1>2016 Season Sponsors</h1>
		<table cellpadding="0" id="sponsors-thisSeason">
		  <tr>
		    <td><a href="http://www.kentico.com/" target="_blank"><img src="/images/sponsor-logos/kentico.jpg" title="Kentico Software" alt="Kentico Logo"></a></td>
			<td><a href="http://www.dwc.edu/" target="_blank"><img src="/images/sponsor-logos/dwc.jpg" title="Daniel Webster College" alt="Daniel Webster College Logo"></a></td>
			<td><a href="http://www.amazonrobotics.com/" target="_blank"><img src="/images/sponsor-logos/amazon-robotics.jpg" title="Amazon Robotics" alt="Amazon Robotics Logo"></a></td>
		  </tr>
		  <tr>
		    <td><a href="http://www.baesystems.com/" target="_blank"><img src="/images/sponsor-logos/bae-systems.jpg" title="BAE Systems" alt="BAE Systems Logo"></a></td>
		    <td><a href="http://www.intel.com/" target="_blank"><img src="/images/sponsor-logos/intel.jpg" title="Intel" alt="Intel Logo"></a></td>
		    <td><a href="http://www.raytheon.com/" target="_blank"><img src="/images/sponsor-logos/raytheon.jpg" title="Raytheon" alt="Raytheon Logo"></a></td>
		  </tr>
		  <tr>
			<td><a href="http://www.solid-scape.com/" target="_blank"><img src="/images/sponsor-logos/solidscape.jpg" title="Solidscape" alt="Solidscape Logo"></a></td>
			<td><a href="http://www.solidworks.com/" target="_blank"><img src="/images/sponsor-logos/solidworks.jpg" title="SolidWorks" alt="SolidWorks Logo"></a></td>
			<td><a href="http://www.mathworks.com/" target="_blank"><img src="/images/sponsor-logos/mathworks.png" title="MathWorks" alt="MathWorks Logo"></a></td>
		  </tr>
		  <tr>
			<td><a href="http://rapidmanufacturing.com/rapid-sheet-metal/" target="_blank"><img src="/images/sponsor-logos/rapid-sheet-metal.png" title="Rapid Sheet Metal" alt="Rapid Sheet Metal Logo"></a></td>
			<td><a href="http://www.brecoflex.com/" target="_blank"><img src="/images/sponsor-logos/brecoflex.png" title="BRECOflex" alt="BRECOflex Logo"></a></td>
			<td><a href="http://rapidmanufacturing.com/rapid-machining/" target="_blank"><img src="/images/sponsor-logos/rapid-machining.png" title="Rapid Machining" alt="Rapid Machining Logo"></a></td>
		  </tr>
		</table>
		<?php if($noscript == false) : ?><a onclick="showhide('past')" class="right"><h3>Past Season's Sponsors</h3></a><?php endif; ?>
		<ul style="font-size:15px">
		  <li>Tess Family</li>
		  <li>Integrated Device Technology, Inc.</li>
		  <li>Krishnan & Knutson Family</li>
		  <li>Williams Family</li>
		  <li>Staussberg Family</li>
		  <li>Karl Hanf</li>
		</ul>
		<?php if($noscript == false) : ?>
		<script type="text/javascript">
          function showhide(ids) {
            var id = document.getElementById(ids);
			if (id.style.display == 'block') {
			  id.style.display = 'none';
			} else {
			  id.style.display = 'block';
			}
          }
		</script>
		<span id="past">
		  <p>&nbsp;</p>
		  <table cellpadding="0" cellspacing="0" width="100%">
		    <tr>
			  <td>
			    <h3>2015 Season Sponsors:</h3>
				<ul>
				  <li>Daniel Webster College</li>
				  <li>Philips Color Kinetics</li>
				  <li>Intel</li>
				  <li>Raytheon</li>
				  <li>Intigua</li>
				  <li>Sanmina - SCI</li>
				  <li>Solidworks</li>
				</ul>
			  </td>
			  <td>
			    <h3>2014 Season Sponsors:</h3>
				<ul>
				  <li>Daniel Webster College</li>
				  <li>Philips Color Kinetics</li>
				  <li>Intel</li>
				  <li>BAE Systems</li>
				  <li>Sanmina - SCI</li>
				</ul>
			  </td>
			  <td>
			    <h3>2013 Season Sponsors:</h3>
				<ul>
				  <li>Daniel Webster College</li>
				  <li>BAE Systems</li>
				  <li>Philips Color Kinetics</li>
				  <li>Intel</li>
				  <li>Sanmina - SCI</li>
				  <li>Rapid Sheet Metal</li>
				</ul>
			  </td>
			</tr>
			<tr><td class="space">&nbsp;</td></tr>
			<tr>
			  <td>
			    <h3>2012 Season Sponsors:</h3>
				<ul>
				  <li>Daniel Webster College</li>
				  <li>BAE Systems</li>
				  <li>Intel</li>
				  <li>BAE Systems Employee Community Fund, Inc. (BECFI)</li>
				  <li>Corning Specialty Material</li>
				</ul>
			  </td>
			  <td>
			    <h3>2011 Season Sponsors:</h3>
				<ul>
				  <li>Daniel Webster College</li>
				  <li>BAE Systems</li>
				  <li>Intel</li>
				  <li>BAE Systems Employee Community Fund, Inc. (BECFI)</li>
				  <li>Wayne Collette</li>
				  <li>Colorco</li>
				</ul>
			  </td>
			  <td>
			    <h3>2010 Season Sponsors:</h3>
				<ul>
				  <li>Daniel Webster College</li>
				  <li>BAE Systems</li>
				  <li>Intel</li>
				  <li>NASA</li>
				  <li>BAE Systems Employee Community Fund, Inc. (BECFI)</li>
 				  <li>Colorco</li>
				</ul>
			  </td>
			</tr>
			<tr><td class="space">&nbsp;</td></tr>
			<tr>
			  <td>
			    <h3>2009 Season Sponsors:</h3>
				<ul>
				  <li>Daniel Webster College</li>
				  <li>BAE Systems</li>
				  <li>Intel</li>
				  <li>NASA</li>
				  <li>BAE Systems Employee Community Fund, Inc. (BECFI)</li>
				  <li>Collette Management, Inc.</li>
				  <li>Wayne Collette</li>
				</ul>
			  </td>
			  <td>
			    <h3>2008 Season Sponsors:</h3>
				<ul>
				  <li>Daniel Webster College</li>
				  <li>BAE Systems</li>
				  <li>NASA</li>
				  <li>BAE Systems Employee Community Fund, Inc. (BECFI)</li>
				  <li>Collette Management, Inc.</li>
				  <li>Wayne Collette</li>
				</ul>
			  </td>
			</tr>
		  </table>
		</span>
		<?php endif; ?>
		<p>&nbsp;</p>
		<p>Our team's relationship with Daniel Webster College (DWC) <!--and BAE Systems--> began in our first year and has only grown from there. DWC has allowed us to use their space, machine shop, SolidWorks, and college students as our mentors. <!--The grant we receive from BAE Systems each year allows us to attend the NE FIRST District Events and covers other team expenses.--> In 2009 Intel began to give our team grants because one of our mentors was employed there, they paid our team for the time he spent volunteering with us. In 2012, we created relationships with two new sponsors, Philips Color Kinetics and Sanmina. One of our new mentors works at Philips Color Kinetics and was very helpful in attaining a grant that would help our team stay afloat during the current and future seasons. This same mentor also assisted in the building of the relationship between Sanmina and Team 2342. In 2014, our team received a grants from Intigua and Raytheon through two of our mentors. Team 2342 is focused and dedicated to strengthening the relationship with these companies in the future.</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<table cellpadding="0" cellspacing="0" width="100%">
		  <tr>
		    <td id="news">
			  <h2><a href="http://blog.team2342.org/search/label/Sponsor%20Update">Latest Blog Posts for Sponsors</a> <a href="http://blog.team2342.org/feeds/posts/default/-/Sponsor%20Update" target="_blank"><img src="http://www.team2342.org/images/rss.png" alt="Atom Feed" title="Atom Feed for Sponsors" width="16" height="16"></a></h2>
<?php if($noscript == false) : ?>
<script type="text/javascript">
<!--
rssmikle_url="http://blog.team2342.org/feeds/posts/default/-/Sponsor%20Update";
rssmikle_frame_width="450";
rssmikle_frame_height="200";
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
<?php if($noscript == true) : ?><p>Lastest Blog Posts for Sponsors requires JavaScript to run. Please <a href="http://www.enable-javascript.com" target="_blank">enable JavaScript</a> or visit the blog directly at <a href="http://blog.team2342.org/search/label/Sponsor%20Update">blog.team2342.org/search/label/Sponsor Update</a>.</p><?php endif; ?>
<?php if($noscript == false) : ?><p style="color:grey;"><small>Powered by <a href="http://feed.mikle.com/" target="_blank" style="color:grey;">FeedWind</a></small></p><?php endif; ?>
			</td>
			<td id="donate-subscribe">
			  <h2>Subscribe to our Newsletter</h2>
			  <form action="http://team2342.us3.list-manage.com/subscribe/post?u=cb9b5455d50a8fc7753d45cec&amp;id=d22645b367" method="post">
				<p>Email: <input type="email" name="EMAIL" size="40" required></p>
				<p>Name: <input type="text" name="FNAME" placeholder="First"> <input type="text" name="LNAME" placeholder="Last"></p>
				<p>&nbsp;</p>
				<p class="b">Email Format</p>
				<p><input type="radio" value="html" name="EMAILTYPE" checked> HTML</p>
				<p><input type="radio" value="text" name="EMAILTYPE"> Text</p>
				<p>&nbsp;</p>
				<input type="submit" value="Subscribe">
			  </form>
			</td>
		  </tr>
		</table>
	  </div>
	</div>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/footer.php"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/copyright.php"); ?>
  </body>
</html>