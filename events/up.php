<html>
	  <head>
	  	  <title>Team 2342 Upcoming Events Flyer for Brochures (<?php echo date("m-d-Y") ?>)</title>
		  <meta content="text/html;charset=UTF-8" http-equiv="content-type">
		  <script>
		  alert("This is the auto generation mechanism for the Upcoming Events flyer that goes in the Brochures. It is designed to print from Google Chrome. When printing please set the layout to landscape, set the margins to none, and allow background graphics.");
		  </script>
		  <style>
		  	  body
			  {
			  padding-top:12px;
			  padding-right:12px;
			  padding-left:12px;
			  word-wrap:break-word;
			  }
			  p
			  {
			  color:black;
			  font-size:15px;
			  margin:0;
			  font-family:Arial;
			  }
			  td
			  {
			  width:255px;
			  padding:5px;
			  padding-left:24px;
			  padding-right:24px;
			  border-right:1px solid black;
			  }
			  tr td p:first-child
			  {
			  font-size:23px;
			  font-weight:bold;
			  }
			  tr td p:nth-child(2)
			  {
			  font-size:17px;
			  }
			  tr td div
			  {
			  border:2px solid black;
			  padding:5px;
			  margin-bottom:5px;
			  }
			  tr td div p:first-child
			  {
			  background:#750909;
			  color:white;
			  margin-top:-5px;
			  margin-left:-5px;
			  margin-right:-5px;
			  padding:5px;
			  }
			  td:first-child
			  {
			  padding-left:5px;
			  }
			  tr:first-child td p
			  {
			  font-size:45px;
			  font-weight:bold;
			  text-align:center;
			  margin-bottom:5px;
			  }
		  </style>
	  </head>
	  <body>
	  	  <table cellpadding="0" cellspacing="0">
		  	  <tr>
			  	  <td>
			  	  	  <p>Upcoming Events</p>
				  </td>
				  <td>
				  	  <p>Upcoming Events</p>
				  </td>
				  <td>
				  	  <p>Upcoming Events</p>
				  </td>
	  	  	  </tr>
			  <?php
			  	  if($_GET['first'] == 'allow'){
				  	  $r = true;
				  } else {
				  	  $r = false;
				  }
				  include("/nfs/c06/h04/mnt/157266/domains/www.team2342.org/html/events/processor.php");
				  events("p",$r);
			  ?>
			  <tr>
				  <td>
				  	  <img src="Upcoming%20Events_html_521c7da7.png" style="float:left;height:100px;width:100px;">
					  <p style="height:100px;display:table-cell;vertical-align:middle;padding:10px;">Scan for more information</p>
				  </td>
				  <td>
				  	  <img src="Upcoming%20Events_html_521c7da7.png" style="float:left;height:100px;width:100px;">
					  <p style="height:100px;display:table-cell;vertical-align:middle;padding:10px;">Scan for more information</p>
				  </td>
				  <td>
				  	  <img src="Upcoming%20Events_html_521c7da7.png" style="float:left;height:100px;width:100px;">
					  <p style="height:100px;display:table-cell;vertical-align:middle;padding:10px;">Scan for more information</p>
				  </td>
	  	  	  </tr>
	  	  </table>
	  </body>
</html>