<?php
  require_once("/nfs/c06/h04/mnt/157266/domains/www.team2342.org/html/structure/Mobile_Detect.php");
  $detect = new Mobile_Detect;
  $thispage = "calendar";
  include($_SERVER["DOCUMENT_ROOT"]."/structure/mobile-detection.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php include($_SERVER["DOCUMENT_ROOT"]."/structure/head.php"); ?>
    <title>Calendar | Team 2342</title>
  </head>
  <body>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/header.php"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/menu.php"); ?>
	<div id="content">
	  <div>
		<h1>Team Calendar</h1>
		<?php if($noscript == true) : ?><p>The calendar works far smoother if you <a href="http://www.enable-javascript.com" target="_blank">enable JavaScript</a>.</p><?php endif; ?>
		<p>&nbsp;</p>
		<iframe src="https://www.google.com/calendar/<?php if($noscript == true) {echo 'html';} ?>embed?showTitle=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=team2342.org_5of3nhfulu26b9ehnj31r55sao%40group.calendar.google.com&amp;color=%23B1440E&amp;src=en.usa%23holiday%40group.v.calendar.google.com&amp;color=%238D6F47&amp;ctz=America%2FNew_York" style="border-width:0" width="950" height="600" frameborder="0" scrolling="no"></iframe>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<h2><a name="subscribe" class="link-no pointer-no">Subscribe to our Calendar</a></h2>
		<p>&nbsp;</p>
		<p><b>Google Calendar Users:</b> If you use Google Calendar, subscribing to our calendar is easy, simply visit <a href="http://calendar.google.com/?cid=team2342.org_5of3nhfulu26b9ehnj31r55sao@group.calendar.google.com" target="_blank" style="white-space:nowrap">calendar.google.com/?cid=team2342.org_5of3nhfulu26b9ehnj31r55sao@group.calendar.google.com</a>, login (if necessary), and click <i>Yes, add this calendar</i>.</p>
		<p>&nbsp;</p>
		<p><b>Other Calendar Programs:</b> Please see the following links for how to subscribe to calendars using Hotmail, Yahoo, Apple and Outlook. The iCal address for our calendar is <a href="http://www.team2342.org/calendar/ical" download>www.team2342.org/calendar/ical</a>.</p>
		<p>&nbsp;</p>
		<ul>
		  <li><a href="http://windows.microsoft.com/en-us/windows/outlook/calendar-import-vs-subscribe" target="_blank">Subscribe in Hotmail Calendar (also referred to as Live or Outlook.com Calendar)</a></li>
		  <li><a href="http://help.yahoo.com/qe/uk/tutorials/cal/cal_subscribe5.html" target="_blank">Subscribe in Yahoo! Calendar</a></li>
		  <li><a href="http://support.apple.com/kb/PH11523" target="_blank">Subscribe in Apple Calendar</a></li>
		  <li><a href="https://support.office.com/en-in/article/View-and-subscribe-to-Internet-Calendars-f6248506-e144-4508-b658-c838b6067597#bm2" target="_blank">Subscribe in Outlook</a></li>
		</ul>
	  </div>
	</div>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/footer.php"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/copyright.php"); ?>
  </body>
</html>