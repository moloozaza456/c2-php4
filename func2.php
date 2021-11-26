<?php
//Function PHP
//1.User-defined a Function

function add($a,$b){ //formal parameter
	$a; //initialization is input
	$b; //initialization is input
	$add = $a + $b; //expression Coce box
	echo "This is a Function add = ".$add."<br/>"; //display
}
add(20, 5); //Calling add Function with argument parameter

function sub($a,$b){
	$a;
	$b;
	$sub = $a - $b;
	echo "This is a Function Sub = ".$sub."<br/>";
}
sub(20,5); //Calling sub Function

function division($a,$b){
	$a;
	$b;
	$division = $a/$b;
	echo "This is a Function division = ".$division."<br/>";
}
division(100,5); //Calling division Function

function multiply($a,$b){
	$a;
	$b;
	$multiply = $a * $b;
	echo "This is a Function multiply = ".$multiply."<br/>";
}
multiply(10,5); //Calling multiply Function
