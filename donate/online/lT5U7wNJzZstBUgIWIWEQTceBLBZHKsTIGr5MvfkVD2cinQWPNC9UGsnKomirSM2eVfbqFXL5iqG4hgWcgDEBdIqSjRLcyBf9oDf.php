<?php
  require_once("/nfs/c06/h04/mnt/157266/domains/www.team2342.org/html/structure/Mobile_Detect.php");
  $detect = new Mobile_Detect;
  $thispage = "donate/online";
  include($_SERVER["DOCUMENT_ROOT"]."/structure/mobile-detection.php");
?>
<?php
$name = $_GET['name'];
$amount = $_GET['amount'];

if (empty($name) || empty($amount)) {
header( "Location: /donate/online/$addnoscript" );
} else {
mail( "donate@team2342.org", "$name has CANCELED Donation of $$amount", 
"
Team 2342 Donation CANCELED
Name: $name
Amount: $$amount
", "From: Team Website <team2342.org@team2342.org>" );
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php include($_SERVER["DOCUMENT_ROOT"]."/structure/head.php"); ?>
    <title>Donation Canceled | Team 2342</title>
  </head>
  <body>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/header.php"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/menu.php"); ?>
	<div id="content">
	  <div>
		<h1>Donation Canceled</h1>
		<p>&nbsp;</p>
		<?php if($noscript == false) : ?><p>Redirecting you to the homepage in <span id="counter">5</span>...</p><?php endif; ?>
		<?php if($noscript == true) : ?><p>Click <a href="/<?php echo $addnoscript ?>">here</a> to return to the homepage.</p> </noscript><?php endif; ?>
<script type="text/javascript">
function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=0) {
        document.location = '/';
    } else {
        i.innerHTML = parseInt(i.innerHTML)-1;
	}
}
setInterval(function(){ countdown(); },1000);
</script>
	  </div>
	</div>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/footer.php"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/copyright.php"); ?>
  </body>
</html>