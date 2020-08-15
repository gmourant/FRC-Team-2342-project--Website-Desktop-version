<?php
session_start();
require_once("/nfs/c06/h04/mnt/157266/domains/www.team2342.org/html/structure/Mobile_Detect.php");
$detect = new Mobile_Detect;
$thispage = "donate/online";
include($_SERVER["DOCUMENT_ROOT"]."/structure/mobile-detection.php");

$donateForm = true ;
$confirm = false ;
$redirecting = false ;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname       = htmlentities($_REQUEST['firstname']);
  $lastname        = htmlentities($_REQUEST['lastname']);
  $title           = htmlentities($_REQUEST['title']);
  $company         = htmlentities($_REQUEST['company']);
  $address1        = htmlentities($_REQUEST['address1']);
  $address2        = htmlentities($_REQUEST['address2']);
  $city            = htmlentities($_REQUEST['city']);
  $state           = htmlentities($_REQUEST['state']);
  $zip             = htmlentities($_REQUEST['zip']);
  $phone1          = htmlentities($_REQUEST['phone1']);
  $phone2          = htmlentities($_REQUEST['phone2']);
  $phone3          = htmlentities($_REQUEST['phone3']);
  $email           = htmlentities($_REQUEST['email']);
  $donationtype    = htmlentities($_REQUEST['donation-type']);
  $amount          = htmlentities($_REQUEST['amount']);
  $amountcents     = htmlentities($_REQUEST['amount-cents']);
  $logo            = htmlentities($_REQUEST['logo']);
  $logourl         = htmlentities($_REQUEST['logo-url']);
  $presentation    = htmlentities($_REQUEST['presentation']);
  $nameDisplayed   = htmlentities($_REQUEST['nameDisplayed']);
  $spemer          = htmlentities($_REQUEST['captcha_code']);
  $edit            = htmlentities($_REQUEST['edit']);
  $redirect        = htmlentities($_REQUEST['redirect']);
  
  $nameErr         = "" ;
  $titleErr        = "" ;
  $companyErr      = "" ;
  $address1Err     = "" ;
  $address2Err     = "" ;
  $cityErr         = "" ;
  $stateErr        = "" ;
  $zipErr          = "" ;
  $phoneErr        = "" ;
  $emailErr        = "" ;
  $donationtypeErr = "" ;
  $amountErr       = "" ;
  $logoErr         = "" ;
  $spemerErr       = "" ;
  
  $errorNot        = "" ;
  $continue        = true ;
  
  include_once $_SERVER['DOCUMENT_ROOT'] . '/securimage/securimage.php';
  $securimage = new Securimage();

  if (empty($firstname) || empty($lastname)) {
    $nameErr = "Full name is required" ;
	$continue = false ;
  } elseif (!preg_match("/^[a-zA-Z]*$/",$firstname) || !preg_match("/^[a-zA-Z]*$/",$lastname)) {
    $nameErr = "Only letters allowed" ;
	$continue = false ;
  } if ($donationtype == "Corporate" && empty($title)) {
    $titleErr = "Title is required" ;
	$continue = false ;
  } if ($donationtype == "Corporate" && empty($company)) {
    $companyErr = "Company is required" ;
	$continue = false ;
  } if (empty($address1)) {
    $address1Err = "Street address is required" ;
	$continue = false ;
  } elseif (!preg_match("/^[a-zA-Z9876543210. ]*$/",$address1)) {
    $address1Err = "Only letters and numbers allowed" ;
	$continue = false ;
  } if (!preg_match("/^[a-zA-Z9876543210. ]*$/",$address2)) {
    $address2Err = "Only letters and numbers allowed" ;
	$continue = false ;
  } if (empty($city)) {
    $cityErr = "City is required" ;
	$continue = false ;
  } elseif (!preg_match("/^[a-zA-Z ]*$/",$city)) {
    $cityErr = "Only letters allowed" ;
	$continue = false ;
  } if (empty($state)) {
    $stateErr = "State is required" ;
	$continue = false ;
  } if (empty($zip)) {
    $zipErr = "Zip code is required" ;
	$continue = false ;
  } elseif (strlen($zip) < 5 || !is_numeric($zip)) {
    $zipErr = "Zip code is invalid" ;
	$continue = false ;
  } if (empty($phone1) || empty($phone2) || empty($phone3)) {
    $phoneErr = "Full phone number is required" ;
	$continue = false ;
  } elseif ((strlen($phone1) < 3) || (strlen($phone2) < 3) || (strlen($phone3) < 4) || !is_numeric($phone1) || !is_numeric($phone2) || !is_numeric($phone3)) {
    $phoneErr = "Invalid phone number" ;
	$continue = false ;
  } if (empty($email)) {
    $emailErr = "Email is required" ;
	$continue = false ;
  } elseif (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
    $emailErr = "Email is invalid" ;
	$continue = false ;
  } if (empty($donationtype)) {
    $donationtypeErr = "Donation type is required" ;
	$continue = false ;
  } if (empty($amount)) {
    $amountErr = "Amount is required" ;
	$continue = false ;
  } elseif (strlen($amountcents) < 2 || !is_numeric($amount) || !is_numeric($amountcents) || empty($amountcents)) {
    $amountErr = "Amount is invalid" ;
	$continue = false ;
  } if ($logo == "Yes" && empty($logourl)) {
    $logoErr = "Logo url is required" ;
	$continue = false ;
  } elseif ($logo == "Yes" && !preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$logourl)) {
    $logoErr = "Logo url is invalid" ;
	$continue = false ;
  } if ($edit == "Yes") {
	$continue = false ;
  } elseif ($redirect == "Yes") {
  } elseif (empty($spemer)) {
    $spemerErr = "Captcha Code is required" ;
	$continue = false ;
  } elseif ($securimage->check($_POST['captcha_code']) == false) {
    $spemerErr = "Captcha Code was incorrect" ;
	$continue = false ;
  }
  
  if ($continue == false) {
	if ($edit != "Yes") {
	  $errorNot = "alert('The donation form contains errors.');" ;
    }
  } elseif ($continue == true) {
    if ($redirect == "Yes") { 
	  $donateForm = false ;
      $confirm = false ;
	  $redirecting = true ;
	} else {
	  $donateForm = false ;
      $confirm = true ;
	}
  }
}

if ($redirecting == true) {
  if ($nameDisplayed == "No") {
  } else {
    $nameDisplayed = "Yes" ;
  }
  
  if ($nameDisplayed == "Yes" && $logo == "Yes" && $amount >= 500) {
  } else {
    $logo = "No" ;
    $logourl = "N/A" ;
  }
  
  if ($presentation == "Yes") {
  } else {
    $presentation = "No" ;
  }
  
  mail( "donate@team2342.org", "$firstname $lastname made a $donationtype Donation of $$amount.$amountcents", 
"
Team 2342 Donation
Name: $firstname $lastname
Title: $title
Organization: $company
Street Address 1: $address1
Street Address 2: $address2
City: $city
State: $state
Zip: $zip
Phone: ($phone1) $phone2-$phone3
Email: $email
Donation Type: $donationtype
Donation Amount: $$amount.$amountcents
Display Name Publicly: $nameDisplayed
Logo: $logo
Logo Url: $logourl
Presentation: $presentation
", "From: Team Website <team2342.org@team2342.org>" );
  
  $noscriptee = $_REQUEST['noscript'];
  $addnoscriptee = "";
  if ($noscriptee == true) {$addnoscriptee = "%26noscript=true";}
  
  header("Location: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=bruce.george@team2342.org&item_name=Team 2342 Sponsorship Donation&first_name=$firstname&last_name=$lastname&address1=$address1&address2=$address2&city=$city&state=$state&zip=$zip&night_phone_a=$phone1&night_phone_b=$phone2&night_phone_c=$phone3&email=$email&amount=$amount.$amountcents&no_shipping=1&no_note=1&currency_code=USD&lc=US&rm=2&cancel_return=http://www.team2342.org/donate/online/lT5U7wNJzZstBUgIWIWEQTceBLBZHKsTIGr5MvfkVD2cinQWPNC9UGsnKomirSM2eVfbqFXL5iqG4hgWcgDEBdIqSjRLcyBf9oDf.php%3Fname=$firstname%20$lastname%26amount=$amount.$amountcents$addnoscriptee&return=http://www.team2342.org/donate/thank-you/%3Ftype=PayPal%26email=$email%26firstname=$firstname%26lastname=$lastname%26amount=$amount.$amountcents$addnoscriptee");
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php include($_SERVER["DOCUMENT_ROOT"]."/structure/head.php"); ?>
    <title>Donate Online | Team 2342</title>
<script type="text/javascript"><?php echo $errorNot ?></script>
<script type="text/javascript">
<!--
var letters = 'ABCÇDEFGHIJKLMNÑOPQRSTUVWXYZabcçdefghijklmnñopqrstuvwxyzàáÀÁéèÈÉíìÍÌïÏóòÓÒúùÚÙüÜ'
var numbers = '1234567890'
var signs = ',.:;@-\''
var dot = '.'
var space = ' '
var mathsigns = '+-=()*/'
var custom = '<>#$%&?¿'

function filter(e,allow) {
     var k;
     k=document.all?parseInt(e.keyCode): parseInt(e.which);
     if (e.keyCode != 8){
     return (allow.indexOf(String.fromCharCode(k))!=-1);
	 }
}

// -->
</script>
<script type="text/javascript">
function movetoNext(current, nextFieldID) {
  if (current.value.length == current.maxLength) {
    document.getElementById(nextFieldID).focus();
  }
}
</script>
  </head>
  <body>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/header.php"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/menu.php"); ?>
	<div id="content">
	  <div>
		<a href="http://www.paypal.com/webapps/mpp/paypal-popup" target="_blank" title="How PayPal Works"<?php if($noscript == false) : ?> onclick="javascript:window.open('http://www.paypal.com/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"<?php endif; ?>><img src="https://www.paypalobjects.com/webstatic/mktg/logo/bdg_payments_by_pp_2line.png" class="right" border="0" alt="Payments by PayPal"></a>
		<h1>Online Donate/Sponsorship Form</h1>
		<p>&nbsp;</p>
		<?php if($donateForm == true) : ?>
		<p>Since the Greater Nashua FIRST Robotics Club is a 501(c)(3) nonprofit organization &mdash; <b>EIN: 113814533</b> &mdash; all contributions are tax deductible. The names of all donors appear on our sponsors page (unless donor specifies otherwise).</p>
		<p>&nbsp;</p>
		<p><span class="red">*</span> indicates Required</p>
		<p>&nbsp;</p>
		<form id="donation-form" action="/donate/online/<?php echo $addnoscript ?>" method="post">
		  <p><span>*</span>Name: <input style="text-transform:capitalize;" type="text" name="firstname" placeholder="First" required value="<?php echo $firstname ?>" onkeypress="return filter(event,letters)"> <input style="text-transform:capitalize;" type="text" name="lastname" placeholder="Last" required value="<?php echo $lastname ?>" onkeypress="return filter(event,letters)"> <span class="red"><?php echo $nameErr ?></span></p>
		  <p>Title: <input type="text" size="40" name="title" placeholder="Required for Corporate Donations" value="<?php echo $title ?>"> <span class="red"><?php echo $titleErr ?></span></p>
		  <p>Organization: <input type="text" size="50" name="company" placeholder="Required for Corporate Donations" value="<?php echo $company ?>"> <span class="red"><?php echo $companyErr ?></span></p>
		  <p><span>*</span>Street Address 1: <input style="text-transform:capitalize;" type="text" size="40" name="address1" required value="<?php echo $address1 ?>" onkeypress="return filter(event,numbers+letters+dot+space)"> <span class="red"><?php echo $address1Err ?></span></p>
		  <p>Street Address 2: <input style="text-transform:capitalize;" type="text" size="40" name="address2" value="<?php echo $address2 ?>" onkeypress="return filter(event,numbers+letters+dot+space)"> <span class="red"><?php echo $address2Err ?></span></p>
		  <p>
		    <span>*</span>City: <input style="text-transform:capitalize;" type="text" name="city" required value="<?php echo $city ?>" onkeypress="return filter(event,letters+space)"> <span class="red"><?php echo $cityErr ?></span> 
		    <span>*</span>State: <select name="state" required><option></option>
			  <option value="AL" <?php if ($state == 'AL') { echo 'selected'; } ?>>Alabama</option>
			  <option value="AK" <?php if ($state == 'AK') { echo 'selected'; } ?>>Alaska</option>
			  <option value="AS" <?php if ($state == 'AS') { echo 'selected'; } ?>>American Samoa</option>
			  <option value="AZ" <?php if ($state == 'AZ') { echo 'selected'; } ?>>Arizona</option>
			  <option value="AR" <?php if ($state == 'AR') { echo 'selected'; } ?>>Arkansas</option>
			  <option value="CA" <?php if ($state == 'CA') { echo 'selected'; } ?>>California</option>
			  <option value="CO" <?php if ($state == 'CO') { echo 'selected'; } ?>>Colorado</option>
			  <option value="CT" <?php if ($state == 'CT') { echo 'selected'; } ?>>Connecticut</option>
			  <option value="DE" <?php if ($state == 'DE') { echo 'selected'; } ?>>Delaware</option>
			  <option value="DC" <?php if ($state == 'DC') { echo 'selected'; } ?>>District of Columbia</option>
			  <option value="FL" <?php if ($state == 'FL') { echo 'selected'; } ?>>Florida</option>
			  <option value="GA" <?php if ($state == 'GA') { echo 'selected'; } ?>>Georgia</option>
			  <option value="GU" <?php if ($state == 'GU') { echo 'selected'; } ?>>Guam</option>
			  <option value="HI" <?php if ($state == 'HI') { echo 'selected'; } ?>>Hawaii</option>
			  <option value="ID" <?php if ($state == 'ID') { echo 'selected'; } ?>>Idaho</option>
			  <option value="IL" <?php if ($state == 'IL') { echo 'selected'; } ?>>Illinois</option>
			  <option value="IN" <?php if ($state == 'IN') { echo 'selected'; } ?>>Indiana</option>
			  <option value="IA" <?php if ($state == 'IA') { echo 'selected'; } ?>>Iowa</option>
			  <option value="KS" <?php if ($state == 'KS') { echo 'selected'; } ?>>Kansas</option>
			  <option value="KY" <?php if ($state == 'KY') { echo 'selected'; } ?>>Kentucky</option>
			  <option value="LA" <?php if ($state == 'LA') { echo 'selected'; } ?>>Louisiana</option>
			  <option value="ME" <?php if ($state == 'ME') { echo 'selected'; } ?>>Maine</option>
			  <option value="MH" <?php if ($state == 'MH') { echo 'selected'; } ?>>Marshall Islands</option>
			  <option value="MD" <?php if ($state == 'MD') { echo 'selected'; } ?>>Maryland</option>
			  <option value="MA" <?php if ($state == 'MA') { echo 'selected'; } ?>>Massachusetts</option>
			  <option value="MI" <?php if ($state == 'MI') { echo 'selected'; } ?>>Michigan</option>
			  <option value="MN" <?php if ($state == 'MN') { echo 'selected'; } ?>>Minnesota</option>
			  <option value="MS" <?php if ($state == 'MS') { echo 'selected'; } ?>>Mississippi</option>
			  <option value="MO" <?php if ($state == 'MO') { echo 'selected'; } ?>>Missouri</option>
			  <option value="MT" <?php if ($state == 'MT') { echo 'selected'; } ?>>Montana</option>
			  <option value="NE" <?php if ($state == 'NE') { echo 'selected'; } ?>>Nebraska</option>
			  <option value="NV" <?php if ($state == 'NV') { echo 'selected'; } ?>>Nevada</option>
			  <option value="NH" <?php if ($state == 'NH') { echo 'selected'; } ?>>New Hampshire</option>
			  <option value="NJ" <?php if ($state == 'NJ') { echo 'selected'; } ?>>New Jersey</option>
			  <option value="NM" <?php if ($state == 'NM') { echo 'selected'; } ?>>New Mexico</option>
			  <option value="NY" <?php if ($state == 'NY') { echo 'selected'; } ?>>New York</option>
			  <option value="NC" <?php if ($state == 'NC') { echo 'selected'; } ?>>North Carolina</option>
			  <option value="ND" <?php if ($state == 'ND') { echo 'selected'; } ?>>North Dakota</option>
			  <option value="MP" <?php if ($state == 'MP') { echo 'selected'; } ?>>Northern Mariana Islands</option>
			  <option value="OH" <?php if ($state == 'OH') { echo 'selected'; } ?>>Ohio</option>
			  <option value="OK" <?php if ($state == 'OK') { echo 'selected'; } ?>>Oklahoma</option>
			  <option value="OR" <?php if ($state == 'OR') { echo 'selected'; } ?>>Oregon</option>
			  <option value="PW" <?php if ($state == 'PW') { echo 'selected'; } ?>>Palau</option>
			  <option value="PA" <?php if ($state == 'PA') { echo 'selected'; } ?>>Pennsylvania</option>
			  <option value="PR" <?php if ($state == 'PR') { echo 'selected'; } ?>>Puerto Rico</option>
			  <option value="RI" <?php if ($state == 'RI') { echo 'selected'; } ?>>Rhode Island</option>
			  <option value="SC" <?php if ($state == 'SC') { echo 'selected'; } ?>>South Carolina</option>
			  <option value="SD" <?php if ($state == 'SD') { echo 'selected'; } ?>>South Dakota</option>
			  <option value="TN" <?php if ($state == 'TN') { echo 'selected'; } ?>>Tennessee</option>
			  <option value="TX" <?php if ($state == 'TX') { echo 'selected'; } ?>>Texas</option>
			  <option value="UT" <?php if ($state == 'UT') { echo 'selected'; } ?>>Utah</option>
			  <option value="VT" <?php if ($state == 'VT') { echo 'selected'; } ?>>Vermont</option>
			  <option value="VI" <?php if ($state == 'VI') { echo 'selected'; } ?>>Virgin Islands</option>
			  <option value="VA" <?php if ($state == 'VA') { echo 'selected'; } ?>>Virginia</option>
			  <option value="WA" <?php if ($state == 'WA') { echo 'selected'; } ?>>Washington</option>
			  <option value="WV" <?php if ($state == 'WV') { echo 'selected'; } ?>>West Virginia</option>
			  <option value="WI" <?php if ($state == 'WI') { echo 'selected'; } ?>>Wisconsin</option>
			  <option value="WY" <?php if ($state == 'WY') { echo 'selected'; } ?>>Wyoming</option>
			</select> <span class="red"><?php echo $stateErr ?></span>
		    <span>*</span>Zip: <input type="text" size="6" name="zip" maxlength="5" required value="<?php echo $zip ?>" onkeypress="return filter(event,numbers)"> <span class="red"><?php echo $zipErr ?></span>
		  </p>
		  <p><span>*</span>Phone: (<input id="phone1" type="text" style="width:2em" name="phone1" maxlength="3" onkeyup="movetoNext(this, 'phone2')" required value="<?php echo $phone1 ?>" onkeypress="return filter(event,numbers)">)
		                           <input id="phone2" type="text" style="width:2em" name="phone2" maxlength="3" onkeyup="movetoNext(this, 'phone3')" required value="<?php echo $phone2 ?>" onkeypress="return filter(event,numbers)">-
								   <input id="phone3" type="text" style="width:3em" name="phone3" maxlength="4" required value="<?php echo $phone3 ?>" onkeypress="return filter(event,numbers)"> <span class="red"><?php echo $phoneErr ?></span></p>
		  <p><span>*</span>Email: <input type="text" size="40" name="email" required value="<?php echo $email ?>"> <span class="red"><?php echo $emailErr ?></span></p>
		  <p>&nbsp;</p>
		  <p><span>*</span> <span class="red"><?php echo $donationtypeErr ?></span></p>
		  <p><input type="radio" name="donation-type" value="Corporate" required <?php if ($donationtype == 'Corporate') { echo 'checked'; } ?>>&nbsp;This is a corporate donation</p>
		  <p><input type="radio" name="donation-type" value="Personal" required <?php if ($donationtype == 'Personal') { echo 'checked'; } ?>>&nbsp;This is a personal donation</p>
		  <p>&nbsp;</p>
		  <p><span>*</span>Donation Amount: $<input type="text" size="5" name="amount" autofill="off" autocomplete="off" required value="<?php echo $amount ?>" onkeypress="return filter(event,numbers)">.<input type="text" style="width:1.2em" name="amount-cents" maxlength="2" autofill="off" autocomplete="off" required value="<?php if (empty($amountcents)) { echo '00'; } else { echo $amountcents; } ?>" onkeypress="return filter(event,numbers)"> <span class="red"><?php echo $amountErr ?></span></p>
		  <p>&nbsp;</p>
		  <p><input type="checkbox" name="nameDisplayed" value="No" <?php if ($nameDisplayed == 'No') { echo 'checked'; } ?>>&nbsp;I would NOT like my/my organizations name (or logo) displayed anywhere as a sponsor.</p>
		  <p><input type="checkbox" name="logo" value="Yes" <?php if ($logo == 'Yes') { echo 'checked'; } ?>>&nbsp;I would like my/my organizations logo to be displayed on the robot and website (for gifts of $500 or greater). The logo can be found on the internet at: http://<input type="text" size="100" name="logo-url" placeholder="www.example.com/images/example-logo.png" value="<?php echo $logourl ?>"> <span class="red"><?php echo $logoErr ?></span></p>
		  <p><input type="checkbox" name="presentation" value="Yes" <?php if ($presentation == 'Yes') { echo 'checked'; } ?>>&nbsp;I/My organization would be interested in seeing a student presentation of Phoenix Robotics.</p>
		  <p>&nbsp;</p>
		  <img id="captcha" src="/securimage/securimage_show.php" alt="CAPTCHA Image" width="215px" height="80px">
		  <?php if($noscript == false) : ?><a onclick="document.getElementById('captcha').src = '/securimage/securimage_show.php?' + Math.random(); return false">[ Different Image ]</a><?php endif; ?>
		  <p><input type="text" name="captcha_code" size="10" autofill="off" autocomplete="off" maxlength="6" required> <span class="red"><?php echo $spemerErr ?></span></p>
		  <p>&nbsp;</p>
		  <input type="submit" name="submit" value="Confirm Details">
		</form>
		<?php endif; ?>
		<?php if($confirm == true) : ?>
		<h3>Please confirm the following.</h3>
		<p>&nbsp;</p>
		<?php
		$firstname = ucwords($firstname) ;
		$lastname = ucwords($lastname) ;
		$address1 = ucwords($address1) ;
		$address2 = ucwords($address2) ;
		$city = ucwords($city) ;
		?>
		<p><?php echo $firstname ?> <?php echo $lastname ?></p>
		<?php
		if ($donationtype == 'Corporate') {
		  echo '<p>'.$title.'</p>';
		  echo '<p>'.$company.'</p>';
		}
		?>
		<p>&nbsp;</p>
		<p><?php echo $address1 ?></p>
		<p><?php echo $address2 ?></p>
		<p><?php echo $city ?>, <?php echo $state ?> <?php echo $zip ?></p>
		<p>&nbsp;</p>
		<p>(<?php echo $phone1 ?>) <?php echo $phone2 ?>-<?php echo $phone3 ?></p>
		<p><?php echo $email ?></p>
		<p>&nbsp;</p>
		<p><b>Donation Amount: $<?php echo $amount ?>.<?php echo $amountcents ?></b></p>
		<?php
		if ($donationtype == 'Corporate') {
		  echo '<p>&nbsp;</p>';
		  echo '<p>This is a corporate donation.</p>';
		} elseif ($donationtype == 'Personal') {
		  echo '<p>&nbsp;</p>';
		  echo '<p>This is a personal donation.</p>';
		}
		if ($nameDisplayed == 'No') {
		  echo '<p>&nbsp;</p>';
		  echo '<p>I would NOT like my/my organizations name (or logo) displayed anywhere as a sponsor.</p>';
		} elseif ($logo == 'Yes' && $amount >= '500') {
		  echo '<p>&nbsp;</p>';
		  echo '<p>I would like my/my organizations logo to be displayed on the robot and website. The logo can be found on the internet at: http://'.$logourl.'</p>';
		}
		if ($presentation == 'Yes') {
		  echo '<p>&nbsp;</p>';
		  echo '<p>I/My organization would be interested in seeing a student presentation of Phoenix Robotics.</p>';
		}
		?>
		<?php if($noscript == false) : ?>
		<p>&nbsp;</p>
		<form action="/donate/online/<?php echo $addnoscript ?>" method="post" id="edit">
			<input type="hidden" name="firstname" value="<?php echo $firstname ?>">
			<input type="hidden" name="lastname" value="<?php echo $lastname ?>">
			<input type="hidden" name="title" value="<?php echo $title ?>">
			<input type="hidden" name="company" value="<?php echo $company ?>">
			<input type="hidden" name="address1" value="<?php echo $address1 ?>">
			<input type="hidden" name="address2" value="<?php echo $address2 ?>">
			<input type="hidden" name="city" value="<?php echo $city ?>">
			<input type="hidden" name="state" value="<?php echo $state ?>">
			<input type="hidden" name="zip" value="<?php echo $zip ?>">
			<input type="hidden" name="phone1" value="<?php echo $phone1 ?>">
			<input type="hidden" name="phone2" value="<?php echo $phone2 ?>">
			<input type="hidden" name="phone3" value="<?php echo $phone3 ?>">
			<input type="hidden" name="email" value="<?php echo $email ?>">
			<input type="hidden" name="donation-type" value="<?php echo $donationtype ?>">
		    <input type="hidden" name="amount" value="<?php echo $amount ?>">
		    <input type="hidden" name="amount-cents" value="<?php echo $amountcents ?>">
			<input type="hidden" name="nameDisplayed" value="<?php echo $nameDisplayed ?>">
			<input type="hidden" name="logo" value="<?php echo $logo ?>">
			<input type="hidden" name="logo-url" value="<?php echo $logourl ?>">
			<input type="hidden" name="presentation" value="<?php echo $presentation ?>">
			<input type="hidden" name="edit" value="Yes">
			<p><a onclick="document.getElementById('edit').submit();">Change</a></p>
		</form>
		<?php endif; ?>
		<p>&nbsp;</p>
		<form action="/donate/online/<?php echo $addnoscript ?>" method="post">
			<input type="hidden" name="firstname" value="<?php echo $firstname ?>">
			<input type="hidden" name="lastname" value="<?php echo $lastname ?>">
			<input type="hidden" name="title" value="<?php echo $title ?>">
			<input type="hidden" name="company" value="<?php echo $company ?>">
			<input type="hidden" name="address1" value="<?php echo $address1 ?>">
			<input type="hidden" name="address2" value="<?php echo $address2 ?>">
			<input type="hidden" name="city" value="<?php echo $city ?>">
			<input type="hidden" name="state" value="<?php echo $state ?>">
			<input type="hidden" name="zip" value="<?php echo $zip ?>">
			<input type="hidden" name="phone1" value="<?php echo $phone1 ?>">
			<input type="hidden" name="phone2" value="<?php echo $phone2 ?>">
			<input type="hidden" name="phone3" value="<?php echo $phone3 ?>">
			<input type="hidden" name="email" value="<?php echo $email ?>">
			<input type="hidden" name="donation-type" value="<?php echo $donationtype ?>">
		    <input type="hidden" name="amount" value="<?php echo $amount ?>">
		    <input type="hidden" name="amount-cents" value="<?php echo $amountcents ?>">
			<input type="hidden" name="nameDisplayed" value="<?php echo $nameDisplayed ?>">
			<input type="hidden" name="logo" value="<?php echo $logo ?>">
			<input type="hidden" name="logo-url" value="<?php echo $logourl ?>">
			<input type="hidden" name="presentation" value="<?php echo $presentation ?>">
			<input type="hidden" name="redirect" value="Yes">
			<input type="submit" name="submit" value="Submit & Continue to Checkout with PayPal">
		</form>
		<?php endif; ?>
	  </div>
	</div>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/footer.php"); ?>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/structure/copyright.php"); ?>
  </body>
</html>