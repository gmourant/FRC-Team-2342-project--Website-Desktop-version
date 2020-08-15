<?php
function events($formatt,$noscript = false) {
    date_default_timezone_set('America/New_York');
    include("/nfs/c06/h04/mnt/157266/domains/www.team2342.org/html/events/events-list.php");
    
    $sortEvents = array(date("YmdHis",$e1DateTimeS),date("YmdHis",$e2DateTimeS),date("YmdHis",$e3DateTimeS),date("YmdHis",$e4DateTimeS),date("YmdHis",$e5DateTimeS),date("YmdHis",$e6DateTimeS),date("YmdHis",$e7DateTimeS),date("YmdHis",$e8DateTimeS),date("YmdHis",$e9DateTimeS),date("YmdHis",$e10DateTimeS),date("YmdHis",$e11DateTimeS),date("YmdHis",$e12DateTimeS),date("YmdHis",$e13DateTimeS),date("YmdHis",$e14DateTimeS),date("YmdHis",$e15DateTimeS),date("YmdHis",$e16DateTimeS));
	$sortEvents = array_unique($sortEvents);
	asort($sortEvents);
	$arImageURL = array($e1ImageURL,$e2ImageURL,$e3ImageURL,$e4ImageURL,$e5ImageURL,$e6ImageURL,$e7ImageURL,$e8ImageURL,$e9ImageURL,$e10ImageURL,$e11ImageURL,$e12ImageURL,$e13ImageURL,$e14ImageURL,$e15ImageURL,$e16ImageURL);
	$arTitle = array($e1Title,$e2Title,$e3Title,$e4Title,$e5Title,$e6Title,$e7Title,$e8Title,$e9Title,$e10Title,$e11Title,$e12Title,$e13Title,$e14Title,$e15Title,$e16Title);
	$arAddCalendarTitlePrefix = array($e1AddCalendarTitlePrefix,$e2AddCalendarTitlePrefix,$e3AddCalendarTitlePrefix,$e4AddCalendarTitlePrefix,$e5AddCalendarTitlePrefix,$e6AddCalendarTitlePrefix,$e7AddCalendarTitlePrefix,$e8AddCalendarTitlePrefix,$e9AddCalendarTitlePrefix,$e10AddCalendarTitlePrefix,$e11AddCalendarTitlePrefix,$e12AddCalendarTitlePrefix,$e13AddCalendarTitlePrefix,$e14AddCalendarTitlePrefix,$e15AddCalendarTitlePrefix,$e16AddCalendarTitlePrefix);
	$arDateTimeS = array($e1DateTimeS,$e2DateTimeS,$e3DateTimeS,$e4DateTimeS,$e5DateTimeS,$e6DateTimeS,$e7DateTimeS,$e8DateTimeS,$e9DateTimeS,$e10DateTimeS,$e11DateTimeS,$e12DateTimeS,$e13DateTimeS,$e14DateTimeS,$e15DateTimeS,$e16DateTimeS);
	$arDateTimeE = array($e1DateTimeE,$e2DateTimeE,$e3DateTimeE,$e4DateTimeE,$e5DateTimeE,$e6DateTimeE,$e7DateTimeE,$e8DateTimeE,$e9DateTimeE,$e10DateTimeE,$e11DateTimeE,$e12DateTimeE,$e13DateTimeE,$e14DateTimeE,$e15DateTimeE,$e16DateTimeE);
	$arAllDay = array($e1AllDay,$e2AllDay,$e3AllDay,$e4AllDay,$e5AllDay,$e6AllDay,$e7AllDay,$e8AllDay,$e9AllDay,$e10AllDay,$e11AllDay,$e12AllDay,$e13AllDay,$e14AllDay,$e15AllDay,$e16AllDay);
	$arLocN = array($e1LocN,$e2LocN,$e3LocN,$e4LocN,$e5LocN,$e6LocN,$e7LocN,$e8LocN,$e9LocN,$e10LocN,$e11LocN,$e12LocN,$e13LocN,$e14LocN,$e15LocN,$e16LocN);
	$arLocA = array($e1LocA,$e2LocA,$e3LocA,$e4LocA,$e5LocA,$e6LocA,$e7LocA,$e8LocA,$e9LocA,$e10LocA,$e11LocA,$e12LocA,$e13LocA,$e14LocA,$e15LocA,$e16LocA);
	$arDes = array($e1Des,$e2Des,$e3Des,$e4Des,$e5Des,$e6Des,$e7Des,$e8Des,$e9Des,$e10Des,$e11Des,$e12Des,$e13Des,$e14Des,$e15Des,$e16Des);
	foreach($sortEvents as $key => $val) {
		$aImageURL = $arImageURL[$key];
		$aTitle = $arTitle[$key];
		$aAddCalendarTitlePrefix = $arAddCalendarTitlePrefix[$key];
		$aDateTimeS = $arDateTimeS[$key];
		$aDateTimeE = $arDateTimeE[$key];
		$aAllDay = $arAllDay[$key];
		$aLocN = $arLocN[$key];
		$aLocA = $arLocA[$key];
		$aDes = $arDes[$key];
	    if((time() < $aDateTimeE) && ($aTitle <> "")){
	        if($formatt == "d"){
				echo "<tr>";
				echo "<td><img src='".$aImageURL."' alt='Event Image'></td>";
				echo "<td>";
				echo "<h2>".$aTitle."</h2><br>";
				echo "<b>".date("l, F jS",$aDateTimeS);
					if($aAllDay == false){
						echo date(", g",$aDateTimeS);
						if(date("i",$aDateTimeS) <> "00"){
							echo date(":i",$aDateTimeS);
						}
						if((date("a",$aDateTimeS) <> date("a",$aDateTimeE)) || (date("d-m-Y",$aDateTimeS) <> date("d-m-Y",$aDateTimeE))){
							echo date("a",$aDateTimeS);
						}
					}
					if((date("d-m-Y",$aDateTimeS) == date("d-m-Y",$aDateTimeE)) && ($aAllDay == true)){
					}else{
						echo "-";
					}
					if(date("d-m-Y",$aDateTimeS) <> date("d-m-Y",$aDateTimeE)){
						echo date("l, F jS",$aDateTimeE);
					}
					if(($aAllDay == false) && (date("d-m-Y",$aDateTimeS) <> date("d-m-Y",$aDateTimeE))){
						echo ", ";
					}
					if($aAllDay == false){
						echo date("g",$aDateTimeE);
						if(date("i",$aDateTimeE) <> "00"){
							echo date(":i",$aDateTimeS);
						}
						echo date("a",$aDateTimeE);
					}
				if($noscript == false){
				    echo "&nbsp;&nbsp;&ndash;&nbsp;
			  <a title='Add to Calendar' class='addthisevent'>
			      Add to Calendar
			      <span class='_start'>".date("d-m-Y H:i:s",$aDateTimeS)."</span>
			      <span class='_end'>".date("d-m-Y H:i:s",$aDateTimeE)."</span>
			      <span class='_zonecode'>15</span>
			      <span class='_summary'>"; if($aAddCalendarTitlePrefix == true){echo "Phoenix Robotics ".strip_tags($aTitle);}else{echo strip_tags($aTitle);} echo "</span>
			      <span class='_description'>".strip_tags($aDes)."</span>
			      <span class='_location'>".strip_tags($aLocN)." - ".strip_tags($aLocA)."</span>
			      <span class='_organizer'>Georges Mourant</span>
			      <span class='_organizer_email'>georges.mourant@team2342.org</span>
			      <span class='_all_day_event'>"; if($aAllDay == true){echo "true";}else{echo "false";} echo "</span>
			      <span class='_date_format'>DD/MM/YYYY</span>
			  </a>
					";
				}
				echo "</b><br><br>";
				echo $aLocN." &ndash; ".$aLocA." <a href='http://maps.google.com/maps?q=".strip_tags($aLocA)."' target='_blank'>map</a><br><br>";
				echo "<span>".$aDes."</span>";
				echo "</td>";
				echo "</tr>";
	        }
			if($formatt == "dp"){
				echo "<li><b>";
				echo date("F j",$aDateTimeS);
				if(date("F j",$aDateTimeS) <> date("F j",$aDateTimeE)){
					echo "-";
					if(date("F",$aDateTimeS) <> date("F",$aDateTimeE)){
						echo date("F ",$aDateTimeE);
					}
					echo date("j",$aDateTimeE);
				}
				echo "</b>:<br>";
				echo $aTitle;
				echo "</li>";
			}
			if($formatt == "m"){
				echo "<div>";
				echo "<span class='hangingHead'>".$aTitle."</span><br><br>";
				echo "<b>".date("D, M j",$aDateTimeS);
					if($aAllDay == false){
						echo date(", g",$aDateTimeS);
						if(date("i",$aDateTimeS) <> "00"){
							echo date(":i",$aDateTimeS);
						}
						if((date("a",$aDateTimeS) <> date("a",$aDateTimeE)) || (date("d-m-Y",$aDateTimeS) <> date("d-m-Y",$aDateTimeE))){
							echo substr(date("a",$aDateTimeS), -2, 1);
						}
					}
					if((date("d-m-Y",$aDateTimeS) == date("d-m-Y",$aDateTimeE)) && ($aAllDay == true)){
					}else{
						echo "-";
					}
					if(date("d-m-Y",$aDateTimeS) <> date("d-m-Y",$aDateTimeE)){
						echo date("D, M j",$aDateTimeE);
					}
					if(($aAllDay == false) && (date("d-m-Y",$aDateTimeS) <> date("d-m-Y",$aDateTimeE))){
						echo ", ";
					}
					if($aAllDay == false){
						echo date("g",$aDateTimeE);
						if(date("i",$aDateTimeE) <> "00"){
							echo date(":i",$aDateTimeS);
						}
						echo substr(date("a",$aDateTimeE), -2, 1);
					}
				echo "</b><br><br>".$aLocN." &ndash; ".$aLocA." <a href='http://maps.google.com/maps?q=".strip_tags($aLocA)."' target='_blank'>map</a><br><br>";
				echo $aDes;
				echo "</div>";
			}
	    }
    }
	if($formatt == "p"){
		$pSortEvents = $sortEvents;
		if($noscript == false){
			for($i=0;$i<count($pSortEvents);$i++){
        		if($pSortEvents[$i] != 0) {
            		unset($pSortEvents[$i]);
					break;
        		}
    		}
		}
		$pSortEvents = array_slice($pSortEvents,0,5,true);
		foreach($pSortEvents as $pkey => $pval) {
			$pTitle = $arTitle[$pkey];
			$pDateTimeS = $arDateTimeS[$pkey];
			$pDateTimeE = $arDateTimeE[$pkey];
			$pAllDay = $arAllDay[$pkey];
			$pLocN = $arLocN[$pkey];
	    	if((time() < $pDateTimeS) && ($pTitle <> "")){
				$pDate = date("l, F j",$pDateTimeS);
					if($pAllDay == false){
						$pDate = $pDate.date(", g",$pDateTimeS);
						if(date("i",$pDateTimeS) <> "00"){
							$pDate = $pDate.date(":i",$pDateTimeS);
						}
						if((date("a",$pDateTimeS) <> date("a",$pDateTimeE)) || (date("d-m-Y",$pDateTimeS) <> date("d-m-Y",$pDateTimeE))){
							$pDate = $pDate.date("a",$aDateTimeS);
						}
					}
					if((date("d-m-Y",$pDateTimeS) == date("d-m-Y",$pDateTimeE)) && ($pAllDay == true)){
					}else{
						$pDate = $pDate."&ndash;";
					}
					if(date("d-m-Y",$pDateTimeS) <> date("d-m-Y",$pDateTimeE)){
						$pDate = $pDate.date("l, F j",$pDateTimeE);
					}
					if(($pAllDay == false) && (date("d-m-Y",$pDateTimeS) <> date("d-m-Y",$pDateTimeE))){
						$pDate = $pDate.", ";
					}
					if($pAllDay == false){
						$pDate = $pDate.date("g",$pDateTimeE);
						if(date("i",$pDateTimeE) <> "00"){
							$pDate = $pDate.date(":i",$pDateTimeS);
						}
						$pDate = $pDate.date("a",$pDateTimeE);
					}
				echo "<tr>";
				echo "<td>";
				echo "<div>";
				echo "<p>".$pTitle."</p>";
				echo "<p>".$pDate."</p>";
				echo "<p>".$pLocN."</p>";
				echo "</div>";
				echo "</td>";
				echo "<td>";
				echo "<div>";
				echo "<p>".$pTitle."</p>";
				echo "<p>".$pDate."</p>";
				echo "<p>".$pLocN."</p>";
				echo "</div>";
				echo "</td>";
				echo "<td>";
				echo "<div>";
				echo "<p>".$pTitle."</p>";
				echo "<p>".$pDate."</p>";
				echo "<p>".$pLocN."</p>";
				echo "</div>";
				echo "</td>";
				echo "</tr>";
			}
		}
	}
}
?>