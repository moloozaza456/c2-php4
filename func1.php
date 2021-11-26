<?php
//Function PHP
function add(){
	$a = 10;
	$b = 5;
	$add = $a + $b;
	echo "This is a Function add = ".$add."<br/>";

}
function sub(){
	$a = 10;
	$b = 5;
	$sub = $a - $b;
	echo "This is a Function Sub = ".$sub."<br/>";
}
function division(){
	$a = 10;
	$b = 5;
	$division = $a/$b;
	echo "This is a Function division = ".$division."<br/>";
}
function multiply(){
	$a = 10;
	$b = 5;
	$multiply = $a * $b;
	echo "This is a Function multiply = ".$multiply."<br/>";
}

add(); //Calling add Function
sub(); //Calling sub Function
division(); //Calling division Function
multiply(); //Calling multiply Function


?>