<?php
function day_name(){
	$day1 = "Monday";
	$day2 = "Tuesday";
	$day3 = "Wednesday";
	$day4 = "Thursday";
	$day5 = "Friday";
	$day6 = "Saturday";
	$day7 = "Sunday";
	return array($day1,$day2,$day3,$day4,$day5,$day6,$day7);
}

$days = day_name();
// echo $days[0]."<br/>".$days[1]."<br/>".$days[2]."<br/>".$days[3]."<br/>".$days[4]."<br/>".$days[5]."<br/>".$days[6];

list ($day1,$day2,$day3,$day4,$day5,$day6) = day_name();
echo $day1,"<br/>",$day2,"<br/>",$day3,"<br/>",$day4,"<br/>",$day5,"<br/>",$day6;
?>