<?php
  require_once("/nfs/c06/h04/mnt/157266/domains/www.team2342.org/html/structure/Mobile_Detect.php");
  $detect = new Mobile_Detect;
  $thispage = "donate/";
  include($_SERVER["DOCUMENT_ROOT"]."/structure/mobile-detection.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php include($_SERVER["DOCUMENT_ROOT"]."/structure/head.php"); ?>
    <title>Donate/Sponsor Us | Team 2342</title>
	<meta name="description" content="FIRST Robotics Team 2342 - Support our team by sponsoring us financially. Students who participate in the FRC are 55 percent more likely to major in science or engineering.">
    <meta name="keywords" content="first,robotics,robot,science,technology,engineering,team,2342,phoenix,nashua,club,donate,sponsorship,sponors,sponsor,donation,help,finance,financal">
  </head>
  <body>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/header.php"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/menu.php"); ?>
	<div id="content">
	  <div>
		<h1>Donate/Sponsor Us</h1>
		<p>&nbsp;</p>
		<h2>Ways to Give:</h2>
		<table cellpadding="0" cellspacing="0" id="donate-table">
		  <tr>
		    <td><a href="/donate/online/<?php echo $addnoscript ?>"><img src="/images/donate/paypal.png" alt="PayPal" title="Debit or Credit Card (PayPal)"></a></td>
		    <td><a href="/files/Team2342%20Sponsorship%20Form.pdf" target="_blank"><img src="/images/donate/cash-check.png" alt="Cash or Check" title="Cash or Check"></td>
		  </tr>
		</table>
		<table cellpadding="0" cellspacing="0" id="donate-table">
		  <tr>
		    <td><a href="http://www.coinbase.com/checkouts/0eb50e53773cc505c6a354af50c15f7f" target="_blank"><img src="/images/donate/bitcoin.png" alt="Bitcoin" title="Bitcoin"></td>
		    <td><a href="http://smile.amazon.com/ch/11-3814533" target="_blank"><img src="/images/donate/amazon-smile.jpg" alt="AmazonSmile" title="AmazonSmile"></td>
		  </tr>
		</table>
		<p>&nbsp;</p>
		<h3>Why We Need Sponsors</h3>
		<p>Running a FIRST robotics team requires more than just determination and knowledge. In order to run a successful FIRST team we need tools, space, food, raw materials, skilled mentors, and money. Without our sponsors, we wouldn't have the opportunity to participate in the FIRST programs which have been so valuable to our students. We are always looking for new sponsors!</p>
		<p>&nbsp;</p>
		<h3>Why You Should Sponsor Us</h3>
		<p>We give high schoolers the opportunity to learn more about science and technology. Students who participate in the FIRST Robotics Competition are 55% more likely to major in science or engineering, and 41% more likely to major in engineering alone. Since the Greater Nashua FIRST Robotics Club is a non-profit 501(c)(3) organization, all contributions are tax deductible. The names of all donors appear on our sponsors page (unless donor specifies otherwise). Please see our <a href="/files/Team2342 Sponsor Letter.pdf" target="_blank" class="b">Sponsor Letter</a> and <a href="/files/Team2342 Mentor Brochure.pdf" target="_blank" class="b">Mentor Brochure</a> or <a href="/files/Team2342 Student Brochure.pdf" target="_blank" class="b">Student Brochure</a> for more information on our team.</p>
		<p>&nbsp;</p>
		<p class="b">Legal Information:</p>
		<ul>
		  <li>Employer Identification Number (also reffered to as Tax ID): 113814533</li>
		  <li><a href="/files/GNFRC%202015%20W9.pdf" target="_blank">W-9 Form</a> (2015 Version)</li>
		</ul>
	  </div>
	</div>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/footer.php"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/copyright.php"); ?>
  </body>
</html>