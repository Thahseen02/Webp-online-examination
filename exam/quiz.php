<?php
date_default_timezone_set('Asia/Calcutta');
$dateFormat = "d F Y -- g:i a";
$targetDate = time() + (15*60);//Change the 25 to however many minutes you want to countdown
$actualDate = time();
$secondsDiff = $targetDate - $actualDate;
$remainingDay     = floor($secondsDiff/60/60/24);
$remainingHour    = floor(($secondsDiff-($remainingDay*60*60*24))/60/60);
$remainingMinutes = floor(($secondsDiff-($remainingDay*60*60*24)-($remainingHour*60*60))/60);
$remainingSeconds = floor(($secondsDiff-($remainingDay*60*60*24)-($remainingHour*60*60))-($remainingMinutes*60));
$actualDateDisplay = date($dateFormat,$actualDate);
$targetDateDisplay = date($dateFormat,$targetDate);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Examination Portal </title>
        <link  rel='stylesheet' href='css/quiz.css'/>
<script type="text/javascript">
  var days = <?php echo $remainingDay; ?>  

  var hours = <?php echo $remainingHour; ?>  

  var minutes = <?php echo $remainingMinutes; ?>  

  var seconds = <?php echo $remainingSeconds; ?> 
function setCountDown ()
{
  seconds--;
  if (seconds < 0){
      minutes--;
      seconds = 59
  }
  if (minutes < 0){
      hours--;
      minutes = 59
  }
  if (hours < 0){
      days--;
      hours = 23
  }
  document.getElementById("remain").innerHTML = minutes+" minutes, "+seconds+" seconds";
  SD=window.setTimeout( "setCountDown()", 1000 );
  if (minutes == '00' && seconds == '00') { seconds = "00"; window.clearTimeout(SD);
   		//window.alert("Time is up. Press OK to continue."); // change timeout message as required
  		window.location = "http://www.yourpage.com" // Add your redirect url
 	} 

}

</script>
</head>
<body onload="setCountDown();">
<div id="contain">
    <a href="#">Start Time: <?php echo $actualDateDisplay; ?></a>
 <a href="#">End Time:<?php echo $targetDateDisplay; ?></a>
 <a href="#"><div id="remain"><?php echo "$remainingMinutes minutes, $remainingSeconds seconds";?></div></a>
</div>

</body>
</html>