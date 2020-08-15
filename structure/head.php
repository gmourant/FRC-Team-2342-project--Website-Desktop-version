<?php
date_default_timezone_set('America/New_York');

$noscript = $_REQUEST['noscript'];
if ($noscript != "true") {
  $noscript = false;
  $noscript1 = "";
  $noscript2 = "";
  $noscript3 = "";
  $noscript4 = "";
  $noscript5 = "";
} elseif ($noscript == "true") {$noscript = true;}
$addnoscript = "";
if ($noscript == true) {$addnoscript = "?noscript=true";}
?>
    <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/stylesheet.css">
<?php if($noscript == false) : ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50247309-1', 'team2342.org');
  ga('send', 'pageview');

</script>
	<script type="text/javascript" src="/js/script.js"></script>
	<script type="text/javascript" src="/js/mootools.js"></script>
	<noscript> <meta http-equiv='refresh' content='0; URL=?noscript=true'> </noscript>
<?php endif; ?>