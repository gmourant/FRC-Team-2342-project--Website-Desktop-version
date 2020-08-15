<?php
  require_once("/nfs/c06/h04/mnt/157266/domains/www.team2342.org/html/structure/Mobile_Detect.php");
  $detect = new Mobile_Detect;
  $thispage = "donate/thank-you";
  include($_SERVER["DOCUMENT_ROOT"]."/structure/mobile-detection.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php include($_SERVER["DOCUMENT_ROOT"]."/structure/head.php"); ?>
    <title>Donation Thank you | Team 2342</title>
  </head>
  <body>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/header.php"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/menu.php"); ?>
	<div id="content">
	  <div>
		<?php
		  $amount = htmlentities($_GET['amount']);
		  $damount = '';
		  if ($amount != '') {
		    $damount = ' of $'.$amount;
		  }
		  
		  $donatetype = htmlentities($_GET['type']);
		  $offline = 'We appreciate your gift.';
		  $online = 'We appreciate your gift, PayPal has emailed to you a receipt for your donation.';
		  if ($donatetype == 'PayPal') {
		    $type = $online;
		  } else {
		    $type = $offline;
		  }
		?>
		<h1>Thank you for your <?php echo $donatetype ?> donation<?php echo $damount ?>!</h1>
		<p>&nbsp;</p>
		<p><?php echo $type ?> If you have any questions regarding your donation, please feel free to contact us at <a href="mailto:info@team2342.org" target="_blank">info@team2342.org</a> or call us at 661-&#65279;418-&#65279;7469.</p>
		<p>&nbsp;</p>
		<p>As a Team 2342 sponsor, if you would like to stay informed about how your money is being spent, please check out our <a href="http://blog.team2342.org/search/label/Sponsor%20Update">blog</a> and <a href="http://eepurl.com/MC0m9" onclick="document.getElementById('mc-embedded-subscribe-form').submit(); return false;">subscribe</a> to our newsletter.</p>
		<p>&nbsp;</p>
		<table cellpadding="0" cellspacing="0" width="100%">
		  <tr>
		    <td id="news">
			  <h2><a href="http://blog.team2342.org/search/label/Sponsor%20Update">Latest Blog Posts for Sponsors</a> <a href="http://blog.team2342.org/feeds/posts/default/-/Sponsor%20Update" target="_blank"><img src="http://www.team2342.org/images/rss.png" alt="Atom Feed" title="Atom Feed for Sponsors" width="20" height="20"></a></h2>
<?php if($noscript == false) : ?>
<script type="text/javascript">
<!--
rssmikle_url="http://blog.team2342.org/feeds/posts/default/-/Sponsor%20Update";
rssmikle_frame_width="475";
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
				<p>Email: <input type="email" name="EMAIL" size="40" value="<?php echo htmlentities($_GET['email']) ?>" required></p>
				<p>Name: <input type="text" name="FNAME" placeholder="First" value="<?php echo htmlentities($_GET['firstname']) ?>"> <input type="text" name="LNAME" placeholder="Last" value="<?php echo htmlentities($_GET['lastname']) ?>"></p>
				<p>&nbsp;</p>
				<p class="b">Email Format</p>
				<p><input type="radio" value="html" name="EMAILTYPE" checked> HTML</p>
				<p><input type="radio" value="text" name="EMAILTYPE"> Text</p>
				<p>&nbsp;</p>
				<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
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