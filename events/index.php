<?php
  require_once("/nfs/c06/h04/mnt/157266/domains/www.team2342.org/html/structure/Mobile_Detect.php");
  $detect = new Mobile_Detect;
  $thispage = "events";
  include($_SERVER["DOCUMENT_ROOT"]."/structure/mobile-detection.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php include($_SERVER["DOCUMENT_ROOT"]."/structure/head.php"); ?>
    <title>Events | Team 2342</title>
<?php if($noscript == false) : ?>
<style>
.addthisevent-drop 						{display:inline-block;position:relative;z-index:999998;font-family:arial;color:#d1391e;text-decoration:none;font-size:14px;text-decoration:none;}
.addthisevent-drop:hover 				{color:#d1391e;font-size:14px;text-decoration:underline;}
.addthisevent-selected 					{}
.addthisevent_dropdown 					{width:200px;position:absolute;z-index:99999;padding:6px 0px 0px 0px;background:#fff;text-align:left;display:none;margin-top:4px;margin-left:-1px;border-top:1px solid #c8c8c8;border-right:1px solid #bebebe;border-bottom:1px solid #a8a8a8;border-left:1px solid #bebebe;-moz-border-radius:2px;-webkit-border-radius:2px;-webkit-box-shadow:1px 3px 6px rgba(0,0,0,0.15);-moz-box-shadow:1px 3px 6px rgba(0,0,0,0.15);box-shadow:1px 3px 6px rgba(0,0,0,0.15);}
.addthisevent_dropdown span 			{width:175px;display:block;line-height:110%;background:#fff;text-decoration:none;font-size:12px;color:#d1391e;padding:8px 10px 9px 15px;}
.addthisevent_dropdown span:hover 		{background:#f4f4f4;color:#d1391e;text-decoration:underline;font-size:12px;}
.addthisevent span 						{display:none!important;}
.addthisevent-drop ._url,.addthisevent-drop ._start,.addthisevent-drop ._end,.addthisevent-drop ._summary,.addthisevent-drop ._description,.addthisevent-drop ._location,.addthisevent-drop ._organizer,.addthisevent-drop ._organizer_email,.addthisevent-drop ._facebook_event,.addthisevent-drop ._all_day_event {display:none!important;}
.addthisevent_dropdown .copyx 			{width:200px;height:21px;display:block;position:relative;cursor:default;}
.addthisevent_dropdown .brx 			{width:180px;height:1px;overflow:hidden;background:#e0e0e0;position:absolute;z-index:100;left:10px;top:9px;}
.addthisevent_dropdown .frs 			{position:absolute;top:5px;cursor:pointer;right:10px;padding-left:10px;font-style:normal;font-weight:normal;text-align:right;z-index:101;line-height:110%;background:#fff;text-decoration:none;font-size:9px;color:#cacaca;}
.addthisevent_dropdown .frs:hover 		{color:#6d84b4;}
.addthisevent 							{visibility:hidden;}
</style>
<?php endif; ?>
  </head>
  <body>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/header.php"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/menu.php"); ?>
	<div id="content">
	  <div>
		<h1>Events</h1>
		<?php include("/nfs/c06/h04/mnt/157266/domains/www.team2342.org/html/events/processor.php"); ?>
		<table cellpadding="0" cellspacing="0" width="100%" id="events">
		  <?php events("d",$noscript); ?>
		</table>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<a href="http://eepurl.com/MC0m9" title="Subscribe to our Newsletter" id="subscribe">Subscribe to our Newsletter</a>
		<p>&nbsp;</p>
		<?php if($nothing == true) : ?>
		<h2 id="countdown">
          <script type="text/javascript">
            TargetDate = "02/18/2015 12:00 AM";
            BackColor = "transparent";
            ForeColor = "black";
            CountActive = true;
            CountStepper = -1;
            LeadingZero = false;
            DisplayFormat = "%%D%% days %%H%% hours %%M%% minutes %%S%% seconds<br><b>to the End of the Build Season</b>";
            FinishMessage = "<b>The Build has ended!</b>";
          </script>
          <script type="text/javascript" src="/js/countdown.js"></script>
        </h2>
		<p>&nbsp;</p>
		<?php endif; ?>
	  </div>
	</div>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/footer.php"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/copyright.php"); ?>
	<?php if($noscript == false) : ?>
	<script type="text/javascript" src="http://js.addthisevent.com/atemay.js"></script>
	<script type="text/javascript">
addthisevent.settings({
    license   : "aao8iuet5zp9iqw5sm9z",
    mouse     : false,
    css       : false,
    outlook   : {show:true, text:"Outlook Calendar"},
    google    : {show:true, text:"Google Calendar"},
    yahoo     : {show:true, text:"Yahoo Calendar"},
    hotmail   : {show:true, text:"Hotmail Calendar"},
    ical      : {show:true, text:"iCal Calendar"},
    facebook  : {show:false, text:"Facebook Event"},
    dropdown  : {order:"google,yahoo,hotmail,ical,outlook"},
    callback  : ""
});
</script>
<?php endif; ?>
  </body>
</html>